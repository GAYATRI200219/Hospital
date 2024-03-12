import java.util.Scanner;
class Seri{
	int n;
	void input()
	{
		Scanner sc=new Scanner(System.in);
		System.out.println("enter the number:");
		n=sc.nextInt();
	}
	void calculate()
	{
		int i=1,sum;
		for(i=1;i<=n;i++)
		{
			if(i%2==0)
			{
				sum=sum-i;
			}
			else
			{
				sum=sum-i;
			}
		}
		System.out.println(sum);
	}
}
class Pract{
	public static void main(String[] args) {
		Seri bn=new Seri();
		bn.input();
		bn.calculate();
	}
}