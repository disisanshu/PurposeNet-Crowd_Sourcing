package authoring_tool;
import java.io.*;
import java.util.*;

public class AuthoringTool
{
	static String artifact;
	static ArrayList<String> coreComponent = new ArrayList<String>();
	static ArrayList<String> purposeServingAccessory = new ArrayList<String>();
	static ArrayList<String> nonPurposeServingAccessory = new ArrayList<String>();
	static ArrayList<String> nacessory = new ArrayList<String>();
	static ArrayList<String> subType = new ArrayList<String>();
	public static void main(String [] args) throws Exception
	{
		String s = "", s1;
		initializeTemplates();
		BufferedReader information = new BufferedReader(new FileReader(new File("information_car")));
		if(new File("result").exists())
			new File("result").delete();
		FileWriter fw = new FileWriter(new File("result"), true);
		ArrayList<Info_node> info = new ArrayList<Info_node>();
		artifact = "Car";//this should be passed from the method from which build template for an artifact is to be called
		int x = 0;
		while((s1 = information.readLine()) != null)
		{
			switch((s = s1.substring(0, s1.indexOf('('))))
			{
			case "coreComponent":			x = 1;
											break;
			case "purposeServingAccessory":	x = 2;
											break;
			case "nonPurposeServingAccessory":	x = 3;
												break;
			case "nacessory":				x = 4;
											break;
			case "subType":					x = 5;
											break;
			}
			Info_node comp = new Info_node();
			comp.x = x;
			comp.property = s1.substring(s1.indexOf(',')+2 , s1.indexOf(')'));
			info.add(comp);			
		}
		information.close();		
		s = buildArtifact(info);
		fw.write(s+"\n");
		System.out.println(s);
		fw.close();
	}
	
	public static void initializeTemplates() throws Exception
	{
		String s = "";	
		BufferedReader component;
		component = new BufferedReader(new FileReader(new File("coreComponent")));
		while((s = component.readLine()) != null)
		{
			coreComponent.add(s);
		}
		component = new BufferedReader(new FileReader(new File("purposeServingAccessory")));
		while((s = component.readLine()) != null)
		{
			purposeServingAccessory.add(s);
		}		
	}
	public static String buildArtifact(ArrayList<Info_node> info)
	{
		ArrayList<String> comp;
		int length = info.size(), x = 0;
		String s = "", s1, s2;
		Info_node item;
		for(; x < info.size(); x++)
		{
			item = info.get(x);
			s2 = "<a href=\"some_link_\">"+item.property+"</a>";
//			System.out.println("Entering for "+s2);
			switch(item.x)
			{
			case 1: comp = coreComponent;
					break;
			case 2: comp = purposeServingAccessory;
					break;
			default: comp = nonPurposeServingAccessory;
					break;
			}
			int i = info.indexOf(item)+1;
//			System.out.println("1.herrre "+i);//+" "+info.get(i).s+" info.size() "+info.size());
			if(i < info.size())
			{
				Info_node in;
				for(; i < info.size();)
				{
					in = info.get(i);
//					System.out.println("**");
//					System.out.println("2.herrre "+in.s+" "+i+" info.size() "+info.size());
					if(in.x == item.x)
					{
						s2 += ", "+"<a href=\"some_link_\">"+in.property+"</a>";
//						System.out.println("To be removed "+info.get(i-1).s);
						info.remove(i-1);
						i--;
					}
					i++;
				}
			}
//			System.out.println("s2 "+s2);
			if(s2.lastIndexOf(',') != -1)
				s2 = s2.substring(0, s2.lastIndexOf(','))+" and"+s2.substring(s2.lastIndexOf(',')+1);
//			System.out.println("s2 "+s2);
			int maximum = comp.size()-1;
			int randomNum = (int)(Math.random()*maximum);
			s1 = comp.get(randomNum);
			s1 = s1.replace("$1", artifact);
			s += s1.replace("$2", s2)+" ";
//			System.out.println(s);
//			System.out.println("Exiting for "+item.s+" "+info.indexOf(item)+" "+info.get(1).s+" "+x);			
		}
		//capitalize the first letter of each sentence
		for(x = s.indexOf('.', 0); s.indexOf('.', x+1) != -1 && x!= s.length()-1; x = s.indexOf('.', x+1))
		{
			if(s.charAt(x+2) > 'a' && s.charAt(x+2) < 'z')
				s = s.substring(0, x+2) + (char)((int)s.charAt(x+2)-32) + s.substring(x+3);
//			System.out.println(s);
		}
		return s;
	}
}

