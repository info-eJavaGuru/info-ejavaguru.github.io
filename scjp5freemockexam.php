<?php
	session_start();

	$relativeDir = "";

	$basedir = $relativeDir."core/";
	$direct = $relativeDir."dir/";
	$imgDir = $relativeDir."images/";
	$classesDir = $relativeDir."classes/";

	$includescripts = $basedir."includescripts.php";
	$navmenu = $basedir."navmenu.php";
	$logoheader = $basedir."logoheader.php";
	$disclaimer = $basedir."disclaimer.php";
	//$endpagebody = $basedir."endpagebody.php";

	$imgLogo = $imgDir."logo.JPG";
	$bottomBarImg = $imgDir."bottom-250x8.gif";
	$topBarImg = $imgDir."top-250x8.gif";

	$navmenufile = $classesDir."menu/NavigationMenu.php";
	$mailfile = $classesDir."email";

	$title = "eJavaGuru: Bringing success to you";

	$login = "/login/login.php";
	$register = "/login/register.php";
	$logout = $direct."logout.php";

	$faq = $relativeDir."faq/faqindex.php";

	$footer = $basedir."footer.php";
?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<TITLE> <?php print $title ?> </TITLE>
<META NAME="Generator" CONTENT="EditPlus">
<META NAME="Author" CONTENT="">
<META NAME="Keywords" CONTENT="SCJP5.0, SCJP 5.0, Training, Courses, Online Learning, Tutor, Mentor">
<META NAME="Description" CONTENT="">
	<?php
	include $includescripts;
	?>

</HEAD>

<body class="oneColLiqCtrHdr">


<div id="container">

	<? php /* HEADER: logo, animated text, Login|Register */ ?>

		<?php
		include $logoheader;
		?>

  <div id="mainContent">

		<?php
		// include "classes/menu/NavigationMenu.php";
		// dynamic menu
		//$navMenu = new NavigationMenu();
		$navMenu->set_CurrentMenu("resources");
		$navMenu->display_menu();
		?>

<? php /*  TABLE 6 (familiar java/ ejava guru can help) */ ?>
<table width="100%">

<tr>
<td valign="top">


<h3>SCJP 5.0 quiz on Enums</h3>

<div id="headingdesc">

<A NAME="enumq1">Q1)</a>
</div>

<div id="headingdesc">
Select all the correct statements regarding Enums (Select any 2 options)

<ul>

<li id="text">a) All enums are subclasses of interface java.lang.Enum.
<li id="text">b) Enums is simply a data structure and hence it is not compiled to a .class file.
<li id="text">c) Enums enable you to define a new data type. For example, If you create an Enum 'Days' you can declare a variable of type 'Days'.
<li id="text">d) All instances of Enums are serializable by default.
</ul>

<a href="http://www.ejavaguru.com/scjp5freemockexam.php#enuma1">Answer to Q1</a>
</div>
<hr width="100%" align="left">
<p>




<div id="headingdesc"><A NAME="enumq2">Q2)</a></div>

<div id="headingdesc">What is the output of the following code:

<pre>
<code>
line1> 	public enum IceCream {
line2> 		VANILLA ("white"),
line3> 		STRAWBERRY ("pink"),
line4> 		WALNUT ("brown"),
line5> 		CHOCOLATE ("dark brown");
line6>
line7> 		String color;
line8>
line9> 		IceCream (String color) {
line10> 			this.color = color;
line11> 		}
line12>
line13> 		public static void main (String[] args) {
line14> 			System.out.println (VANILLA);
line15> 			System.out.println (CHOCOLATE);
line16> 		}
line17> 	}
</code>
</pre>
Options:
<ul>
<li id="text">a) Compilation error : Cannot run an enum as a standalone application.
<li id="text">b) Compilation error at line no 14 & 15 : Cannot access VANILLA and CHOLOCLATE in 'static' main method.
<li id="text">c) No errors. Output:
<pre>
	VANILLA
	CHOCOLATE
</pre>

<li id="text">d) No errors. Output:
<pre>
	white
	dark brown
</pre>
</ul>

<a href="http://www.ejavaguru.com/scjp5freemockexam.php#enuma2">Answer to Q2</a>
</div>

<hr width="100%" align="left">






<p><div id="headingdesc"><A NAME="enumq3">Q3)</a></div>

<div id="headingdesc">What is the output of the following code:

<pre>
line1> 	public enum Day {
line2>		MONDAY (1),
line3>		TUESDAY (2),
line4>		WEDNESDAY (3) {public String toString() {
						return "Good Morning"; } },
line5>		THURSDAY (4),
line6>		FRIDAY (5),
line7>		SATURDAY (6),
line8>		SUNDAY (7);
line9>
line10>		int dayNumber;
line11>
line12>		Day (int dayNumber) {
line13>			this.dayNumber = dayNumber;
line14>		}
line15>
line16>		public static void main (String[] args) {
line17>			for (Day d : Day.values())
line18>				System.out.println (d);
line19>		}
line20>	}
</pre>

Options:

<ul>
<li id="text">a) Compilation error at line number 4 : Invalid code.
<li id="text">b) Executes OK giving OUTPUT:
<pre>
	MONDAY
	TUESDAY
	Good Morning
	THURSDAY
	FRIDAY
	SATURDAY
	SUNDAY
</pre>
<li id="text">c) Runtime error : Cannot execute enum 'Day' as a standalone application.
<li id="text">d) Executes OK giving OUTPUT:
<pre>
	MONDAY
	TUESDAY
	WEDNESDAY
	THURSDAY
	FRIDAY
	SATURDAY
	SUNDAY
</pre>
</ul>
<a href="http://www.ejavaguru.com/scjp5freemockexam.php#enuma3">Answer to Q3</a>
</div>
<hr width="100%" align="left">




<div id="headingdesc"><p><A NAME="enumq4">Q4)</a></div>

<div id="headingdesc">Examine the following code and select the correct options:

<pre>
enum Rating {
	AVERAGE,
	GOOD,
	EXCELLENT;

	abstract String performance();
}

class Test {
	public static void main (String[] args) {
		System.out.println (Rating.AVERAGE);
	}
}
</pre>

<ul>
<li id="text">a) What rubbish, An Enum can never define an abstract method.
<li id="text">b) class Test cannot access the enum constant AVERAGE using the code "Rating.AVERAGE".
<li id="text">c) The above mentioned code will fail to compile.
<li id="text">d) If the enum 'Ratings' is defined as an abstract 'enum', it will compile successfully.
</ul>

<a href="http://www.ejavaguru.com/scjp5freemockexam.php#enuma4">Answer to Q4</a>
</div>
<hr width="100%" align="left">




<div id="headingdesc"><p><A NAME="enumq5">Q5)</a></div>

<div id="headingdesc">Examine the following code and select the correct options that follow:

<pre>
line1> 	public enum IceCream {
line2> 		VANILLA ("white"),
line3> 		STRAWBERRY ("pink"),
line4> 		WALNUT ("brown"),
line5> 		CHOCOLATE ("dark brown");
line6>
line7> 		String color;
line8>
line9> 		IceCream (String color) {
line10> 			this.color = color;
line11> 		}
line12> 	}
line13>
line14> 	public class Test {
line15> 		public static void main (String[] args) {
line16> 			IceCream vanilla = new IceCream ("white");
line17> 			System.out.println ( vanilla );
line18> 		}
line19> 	}
</pre>

<ul>
<li id="text">a) The code prints out 'white'.
<li id="text">b) The code prints out 'VANILLA'.
<li id="text">c) The code fails at runtime.
<li id="text">d) Enums may not be instantiated.
</ul>
<a href="http://www.ejavaguru.com/scjp5freemockexam.php#enuma5">Answer to Q5</a>
</div>
<hr width="100%" align="left">




<p><div id="headingdesc"><A NAME="enumq6">Q6)</a></div>

<div id="headingdesc">Select all the incorrect options:

<ul>
<li id="text">a) Since enums are comparable to traditional classes, they may not be arguments in switch statements.
<li id="text">b) Enums may not extend another class/ enum.
<li id="text">c) Enums inherit the java.lang.Object class.
<li id="text">d) Enums may be extended by another Enum.
</ul>

<a href="http://www.ejavaguru.com/scjp5freemockexam.php#enuma6">Answer to Q6</a>
</div>
<hr width="100%" align="left">



<p><div id="headingdesc"><A NAME="enumq7">Q7)</a></div>

<div id="headingdesc">Examine the following code:

<pre>
line1>	enum Size {
line2>		XS ("Extra Small") { int age() { return 5; }},
line3>		S ("Small") { int age() { return 8; }},
line4>		M ("Medium") { int age() { return 10; }},
line5>		L ("Large") { int age() { return 15; }},
line6>		XL ("Extra Large") { int age() { return 20; }};
line7>
line8>		String description;
line9>
line10>		Size (String desc) {
line11>			this.description = desc;
line12>		}
line13>
line14>	> 	// INSERT CODE HERE
line15>	}
line16>
line17>	class Test {
line18>		public static void main (String[] args) {
line19>			for (Size size : Size.values())
line20>				System.out.println (size);
line21>		}
line22>	}
</pre>

Select the correct lines of code, which when inserted at line number 14, will print out the following output:
<pre>
XS
S
M
L
XL
</pre>
Options:

<ul>
<li id="text">a) 	int age() { return 0; }
<li id="text">b) 	abstract int age();
<li id="text">c) 	short age() { return 100; }
<li id="text">d) 	abstract short age();
</ul>
<a href="http://www.ejavaguru.com/scjp5freemockexam.php#enuma7">Answer to Q7</a>
</div>
<hr width="100%" align="left">




<p><div id="headingdesc"><A NAME="enumq8">Q8)</a></div>

<div id="headingdesc">Examine the following code:

<pre>
import java.util.*;

enum Colours {
	YELLOW (Personality.EXPRESSIVE),
	GREEN (Personality.AMIABLE),
	RED (Personality.ASSERTIVE),
	BLUE (Personality.ANALYTICAL);

	Personality personality;

	Colours (Personality personality) {
		this.personality = personality;
	}

	enum Personality {ASSERTIVE, EXPRESSIVE, AMIABLE, ANALYTICAL };
}

class TestColours {
	public static void main (String[] args)	 {
		// INSERT LINE OF CODE HERE
	}
}
</pre>

Which line of code when replaced with "// INSERT LINE OF CODE HERE", will output a value "true":

<ul>
<li id="text">a)	System.out.println (Colours.Personality.ASSERTIVE instanceof Colours.Personality);
<li id="text">b)	System.out.println (Personality.EXPRESSIVE instanceof Personality);
<li id="text">c)	System.out.println (EXPRESSIVE instanceof Personality);
<li id="text">d) 	None of the above
</ul>

<a href="http://www.ejavaguru.com/scjp5freemockexam.php#enuma8">Answer to Q8</a>
</div>
<hr width="100%" align="left">





<p><div id="headingdesc"><A NAME="enumq9">Q9)</a></div>

<div id="headingdesc">Examine the following code and select the correct options:

<pre>
enum Rating {
	POOR (0.0, 5.0),
	AVERAGE (5.1, 7.0),
	GOOD (7.0, 8.5),
	EXCELLENT (8.6, 9.9);

	double lowerLimit, upperLimit;

	Rating (double ll, double ul) {
		this.lowerLimit = ll;
		this.upperLimit = ul;
	}

	int raise() {
		switch (this) {
			case POOR : 	return 0;
			case AVERAGE : 	return 5;
			case GOOD 	 :	return 20;
			case EXCELLENT: return 45;
		}
		return 0;
	}
}

class Appraisal {
	public static void main (String args[])
				throws NumberFormatException {
		double currentSalary = 100;
		double increment = 0;

		for (Rating r : Rating.values()) {
			increment = currentSalary/ 100 * r.raise();
			System.out.println
				(r + " Performance, 	Revised Salary = "
				   + (currentSalary + increment));
		}
	}
}
</pre>

Options:
<ul>
<li id="text">a) The above code will not compile: enums cannot be used as an argument to switch statement.

<li id="text">b) Code will compile, giving the following output:
<pre>
POOR Performance, 	Revised Salary = 100.0
AVERAGE Performance, 	Revised Salary = 105.0
GOOD Performance, 	Revised Salary = 120.0
EXCELLENT Performance, 	Revised Salary = 145.0
</pre>

<li id="text">c) The code will compile, giving the same results as mentioned in option 'b', if the enum Rating is defined as follows:
<pre>
enum Rating {
	POOR (0.0, 5.0) { int raise() { return 0; } },
	AVERAGE (5.1, 7.0) { int raise() { return 5; } },
	GOOD (7.0, 8.5) { int raise() { return 20; } },
	EXCELLENT (8.6, 9.9) { int raise() { return 45; } };

	double lowerLimit, upperLimit;

	Rating (double ll, double ul) {
		this.lowerLimit = ll;
		this.upperLimit = ul;
	}

	abstract int raise();
}
</pre>

<li id="text">d) The constructor of an enum cannot accept 2 method parameters.
</ul>

<a href="http://www.ejavaguru.com/scjp5freemockexam.php#enuma9">Answer to Q9</a>
</div>
<hr width="100%" align="left">




<p><div id="headingdesc"><A NAME="enumq10">Q10)</a></div>

<div id="headingdesc">Examine the following code and select the correct options:

<pre>
enum Shape {
	CIRCLE (0, "red"),
	TRIANGLE (3),
	SQUARE (4),
	RECTANGLE (4),
	PENTAGON (5),
	HEXAGON (6, "yellow"),
	OCTAGON (8, "pink");

	int numberOfSides;
	String shapeColor;

	Shape (int sides) { numberOfSides = sides; }
	Shape (int sides, String colour) {
		numberOfSides = sides;
		shapeColor = colour;
	}

	public static void main (String[] args) {
		for (Shape s : Shape.values())
			System.out.println(s);
	}
}
</pre>

Options:

<ul>
<li id="text">a) Output of the code is as follows:
<pre>
CIRCLE
TRIANGLE
SQUARE
RECTANGLE
PENTAGON
HEXAGON
OCTAGON
</pre>


<li id="text">b) Output of the code is as follows:
<pre>
CIRCLE red
TRIANGLE
SQUARE
RECTANGLE
PENTAGON
HEXAGON yellow
OCTAGON pink
</pre>

<li id="text">c) The code will not compile : Cannot define more than one constructor in an enum.
<li id="text">d) The code will compile successfully, but throw a runtime error.
</ul>

<a href="http://www.ejavaguru.com/scjp5freemockexam.php#enuma10">Answer to Q10</a>
</div>
<hr width="100%" align="left">




<p><div id="headingdesc"><A NAME="enumq11">Q11)</a></div>

<div id="headingdesc">Examine the following code:
<pre>
public enum Day {
	MONDAY (1),
	TUESDAY (2),
	WEDNESDAY (3),
	THURSDAY (4),
	FRIDAY (5),
	SATURDAY (6),
	SUNDAY (7);

	int dayNumber;

	Day (int dayNumber) {
		this.dayNumber = dayNumber;
	}

	// INSERT CODE HERE

	public static void main (String[] args) {
		for (Day d : Day.values())
			System.out.println (d);
	}
}
</pre>

Select from the following options the correct method, which when inserted in the above enum line, will print out the following result:

<pre>
1 day of week
2 day of week
3 day of week
4 day of week
5 day of week
6 day of week
7 day of week
</pre>

Options:

<ul>
<li id="text">a)
<pre>
public String toString () {
	return dayNumber + " day of week";
}
</pre>

<li id="text">b)
<pre>
public String name () {
	return dayNumber + " day of week";
}
</pre>
</ul>
<a href="http://www.ejavaguru.com/scjp5freemockexam.php#enuma11">Answer to Q11</a>
</div>
<hr width="100%" align="left">




</pre>

<center><h3> ANSWERS </h3></center>

<div id="headingdesc"><A NAME="enuma1">Q1)</a></div>

<div id="headingdesc">Answer : c, d</div>

<div id="headingdesc">Explanation :
<ul>
<li id="text">a) java.lang.Enum is a class and not an interface.
<li id="text">b) Enums are compiled to a .class file.
<li id="text">c) Enums enable you to define a new data type, in a manner similar to the way a class allows you to define a new data type.
<li id="text">d) Enums are subclasses of class java.lang.Enum, which implements the interface java.io.Serializable. If a class implements the interface java.io.Serialisable, its objects are serializable.
</ul>
<a href="http://www.ejavaguru.com/scjp5freemockexam.php#enumq1">Return to Q1</a>
</div>
<hr width="100%" align="left">




<p><div id="headingdesc"><A NAME="#enuma2">Q2)</a></div>

<div id="headingdesc">Answer : c</div>

<div id="headingdesc">Explanation :
<ul>
<li id="text">a) An enum can define a main method and it can be executed as a standalone application.
<li id="text">b) The instances of enums defined in an enum are static and hence available to any static method defined within the enum.
<li id="text">d) The overridden toString method in the Enum class returns the name of this enum constant, as contained in the declaration. You can override the toString method to return a customised String value.
</ul>

<a href="http://www.ejavaguru.com/scjp5freemockexam.php#enumq2">Return to Q2</a>
</div>
<hr width="100%" align="left">





<p><div id="headingdesc"><A NAME="#enuma3">Q3)</a></div>

<div id="headingdesc">Answer : b </div>
<div id="headingdesc">Explanation :
<ul>
<li id="text">a) The code is valid. A single instance of enum can override the methods available to it.
<li id="text">c) An enum can define a main method and it can be executed as a standalone application.
<li id="text">d) The toString method for enum instance 'WEDNESDAY' returns 'Good Morning'.
</ul>
<a href="http://www.ejavaguru.com/scjp5freemockexam.php#enumq3">Return to Q3</a>
</div>
<hr width="100%" align="left">



<p><div id="headingdesc"><A NAME="#enuma4">Q4)</a></div>

<div id="headingdesc">Answer : c</div>
<div id="headingdesc">Explanation : The code will fail to compile because the abstract method 'performance' needs to be implemented by all the enum constants, i.e., AVERAGE, GOOD and EXCELLENT.

<ul>
<li id="text">a) It is OK to define an abstract method in an enum.
<li id="text">b) Since Enum is not defined in class Test, its constant 'AVERAGE' should be prefixed with the Enum name 'Ratings' to access it in class Test.
<li id="text">d) We cannot define abstract enums.
</ul>

<a href="http://www.ejavaguru.com/scjp5freemockexam.php#enumq4">Return to Q4</a>
</div>
<hr width="100%" align="left">




<p><div id="headingdesc"><A NAME="#enuma5">Q5)</a></div>

<div id="headingdesc">Answer : d</div>

<div id="headingdesc">Explanation : Enums cannot be instantiated. The code mentioned in this question will not compile.</div>

<div id="headingdesc"><a href="http://www.ejavaguru.com/scjp5freemockexam.php#enumq5">Return to Q5</a></div>
<hr width="100%" align="left">



<p><div id="headingdesc"><A NAME="#enuma6">Q6)</a></div>

<div id="headingdesc">Answer : a, d</div>

<div id="headingdesc">Explanation :
<ul>
<li id="text">b) Enums can never extend any other class/ Enum.
<li id="text">c) All the Enums are subclasses of java.lang.Enum, which inherits java.lang.Object class.
</ul>
<a href="http://www.ejavaguru.com/scjp5freemockexam.php#enumq6">Return to Q6</a></div>
<hr width="100%" align="left">


<p><div id="headingdesc"><A NAME="#enuma7">Q7)</a></div>

<div id="headingdesc">Answer: a, b</div>

<div id="headingdesc">Explanation : Since all the enum constants, i.e., XS, S, M, L, XL implement the age method, this method can either be defined as a non-abstract method, or as an abstract method.</div>

<div id="headingdesc">Options c and d are not valid because the method "short age()" cannot override the method "int age()".

<ul>
<li id="text">c) The method "short age() { return 100; }" cannot override either of the methods "int age()" and "abstract int age()".
<li id="text">d) The method "abstract short age() { return 100; }" cannot override either of the methods "int age()" and "abstract int age()".
</ul>
<a href="http://www.ejavaguru.com/scjp5freemockexam.php#enumq7">Return to Q7</a></div>
</div>
<hr width="100%" align="left">



<p><div id="headingdesc"><A NAME="#enuma8">Q8)</a></div>

<div id="headingdesc">Answer : a</div>

<div id="headingdesc">Explanation :
<ul>
<li id="text">Enums may be used as a operand for the instanceof operator in the same way that it can be used by a class.
</ul>


<a href="http://www.ejavaguru.com/scjp5freemockexam.php#enumq8">Return to Q8</a>
</div>
<hr width="100%" align="left">




<p><div id="headingdesc"><A NAME="#enuma9">Q9)</a></div>

<div id="headingdesc">Answers : b, c</div>

<div id="headingdesc">Explanation :

<ul>
<li id="text">a) Enums can be used in switch statements.
<li id="text">c) An enum constant can override any number of methods available to it.
<li id="text">d) An enum can define more than 1 constructor (similar to a class) and its constructor can accept more than 1 method parameter.
</ul>
<div id="headingdesc"><a href="http://www.ejavaguru.com/scjp5freemockexam.php#enumq9">Return to Q9</a></div>
</div>
<hr width="100%" align="left">




<p><div id="headingdesc"><A NAME="#enuma10">Q10)</a></div>

<div id="headingdesc"> Answer : a</div>

<div id="headingdesc">Explanation :
<ul>
<li id="text">b) The default implementation of the toString method returns the name of the enum constant. To get any other customised value, override the toString method.
<li id="text">c) The code will compile. An enum can define more than 1 constructor.
<li id="text">d) There is no runtime error with the code.
</ul>
<a href="http://www.ejavaguru.com/scjp5freemockexam.php#enumq10">Return to Q10</a>
</div>
<hr width="100%" align="left">



<p><div id="headingdesc"><A NAME="#enuma11">Q11)</a></div>

<div id="headingdesc">Answer : a</div>

<div id="headingdesc">Explanation :
<ul>
<li id="text">a) name is a final method, which cannot be overridden. It returns the name of the enum constant, exactly as declared in its enum declaration.
</ul>
<a href="http://www.ejavaguru.com/scjp5freemockexam.php#enumq11">Return to Q11</a>
</div>
<p><br><p><br><p><br><p><br><p>


<p><br><p><br><p><br><p><br><p>


<h4>Feedback</h4>
<hr WIDTH="100%">

<div id="coursedesc">Please help us to improve this quiz by submitting your feedback.</div>

<p><form name="feedback" onSubmit="return checkDetails()" action="/feedback/submitexamfeedback.php" method="post">
<input type="hidden" name="mockexam" value="SCJP 5.0">

<div id="formclass">
<table>

		<tr>
		<td>
			Name
		</td>
		<td>
			 <INPUT TYPE="TEXT" name="name">
		</td>
		</tr>

		<tr>
		<td>
			Email Address
		</td>
		<td>
			 <INPUT TYPE="TEXT" name="email">
		</td>
		</tr>

		<tr>
		<td>
			Rate the above quiz on Enums
		</td>
		<td>
			 <INPUT TYPE="RADIO" name="ratings" value="very-difficult">Very difficult
			 <br><INPUT TYPE="RADIO" name="ratings" value="difficult">difficult
			 <br><INPUT TYPE="RADIO" name="ratings" value="OK">OK
			 <br><INPUT TYPE="RADIO" name="ratings" value="easy">Easy
			 <br><INPUT TYPE="RADIO" name="ratings" value="very-easy">Very Easy
		</td>
		</tr>

		<tr>
		<td>
			Comments & Suggestions
		</td>
		<td>
			 <Textarea name="comments" cols="50" rows="5"></textarea>
		</td>
		</tr>

		<TR>
			<TD colspan="2">&nbsp;
		</TR>


		<TR>
			<TD colspan="2">(Please enter your email address, if you want to hear from us)
		</TR>


		<TR>
			<TD colspan="2">&nbsp;
		</TR>
		<TR>
		<TD colspan="2" align="center">	<INPUT TYPE="SUBMIT" name="submit" value="Submit Feedback"></TD>
		</TR>

</div>
</table>
</form>







</td>


<td height="430px" valign="top" align="right">





<script type="text/javascript"><!--
google_ad_client = "pub-5210534993165339";
google_ad_width = 250;
google_ad_height = 250;
google_ad_format = "250x250_as";
google_ad_type = "image";
//2007-10-25: ejavaguru-scjpenum
google_ad_channel = "8666583609";
google_ui_features = "rc:6";
//-->
</script>
<script type="text/javascript"
  src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>

<p>

<script type="text/javascript"><!--
google_ad_client = "pub-5210534993165339";
google_ad_width = 250;
google_ad_height = 250;
google_ad_format = "250x250_as";
google_ad_type = "text";
//2007-10-25: ejavaguru.com
google_ad_channel = "9630163100";
google_color_border = "CCCCCC";
google_color_bg = "FFFFFF";
google_color_link = "3c78b5";
google_color_text = "000000";
google_color_url = "008000";
google_ui_features = "rc:6";
//-->
</script>
<script type="text/javascript"
  src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>

</td>
</tr>
</table>

	<!-- end #mainContent --></div>

  	<?php
  	include $footer;
  	?>

<!-- end #container --></div>
</body>
</HTML>