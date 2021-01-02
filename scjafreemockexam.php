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


<h3>SCJA Mini Mock Exam</h3>


<div id="headingdesc">
<A NAME="q1">Q1)</a>
</div>

<div id="headingdesc">
Which of the following statements are true?

<ul>
<li id="text">a) Encapsulation and Information hiding are used interchangeably.
<li id="text">b) Encapsulation is a language feature.
<li id="text">c) Information hiding is a design principle.
<li id="text">d) Java can have encapsulated data that is not hidden.
<li id="text">e) All of the above
</ul>

<a href="#a1">Answer to Q1</a>
</div>
<hr width="100%" align="left">
<p>



<div id="headingdesc">
<A NAME="q2">Q2)</a>
</div>

<div id="headingdesc">Examine the following UML notation and identify the relationship
between class A and class B:
<p>
<img border="0" align="center" src="images/uml11.JPG"/>


<ul>
<li id="text">a) Dependency
<li id="text">b) Association
<li id="text">c) Aggregation
<li id="text">d) Composition
</ul>

<a href="#a2">Answer to Q2</a>
</div>
<hr width="100%" align="left">





<p><div id="headingdesc">
<A NAME="q3">Q3)</a>
</div>

<div id="headingdesc">Examine the following  UML notation and determine its Java code implementation:
<p>
<img border="0" align="center" src="images/uml12.JPG"/>


<ul>

<li id="text">
<pre>
a)

class B {}
public class A {
	public void method1 (B b) {
		//Code
	}
}
</pre>

<li id="text">
<pre>
b)

class B {}
public class A {
	private B b;
	// code
}
</pre>

<li id="text">
<pre>
c)

class B {}
public class A extends B {
	//code
}
</pre>

<li id="text">
<pre>
d)

interface B {}
public class A implements B {
	//code
}
</pre>
</li>

</ul>

<a href="#a3">Answer to Q3</a>
</div>
<hr width="100%" align="left">



<p>
<div id="headingdesc">
<A NAME="q4">Q4)</a>
</div>

<div id="headingdesc">Which of the following statement(s) are not true about JavaBeans?

<ul>
<li id="text">a) JavaBeans implements java.io.serializable interface.
<li id="text">b) JavaBeans provides no argument constructor.
<li id="text">c) JavaBeans provides getter and setter method for accessing its properties.
<li id="text">d) JavaBeans class can contain public instance variable.
<li id="text">e) None of the above
</ul>

<a href="#a4">Answer to Q4</a>
</div>
<hr width="100%" align="left">




<p>
<div id="headingdesc">
<A NAME="q5">Q5)</a>
</div>

<div id="headingdesc">How many class variables does the following class has?

<pre>
public class MyClass{
	public static int x = 1;
	public char y = 'S';
}

</pre>

<ul>
<li id="text">a) 0
<li id="text">b) 1
<li id="text">c) 2

</ul>
<a href="#a5">Answer to Q5</a>
</div>
<hr width="100%" align="left">




<p><div id="headingdesc">
<A NAME="q6">Q6)</a>
</div>

<div id="headingdesc">Object created using new is placed on

<ul>
<li id="text">a) Stack
<li id="text">b) Queue
<li id="text">c) Heap
<li id="text">d) None of the above.
</ul>

<a href="#a6">Answer to Q6</a>
</div>
<hr width="100%" align="left">



<p>
<div id="headingdesc">
<A NAME="q7">Q7)</a>
</div>

<div id="headingdesc">What is the output of the following class:

<pre>
public class  MyClass{
	public static void main(String[] args) {
		String strMsg = "Welcome";
		strMsg += " to SCJA";
		strMsg.concat(" Certificate");
		System.out.println(strMsg);
	}
}

</pre>

<ul>
<li id="text">a) Welcome
<li id="text">b) Welcome to SCJA
<li id="text">c) Welcome to SCJA Certificate
</ul>
<a href="#a7">Answer to Q7</a>
</div>
<hr width="100%" align="left">




<p>
<div id="headingdesc">
<A NAME="q8">Q8)</a>
</div>

<div id="headingdesc">Entity beans are used to

<ul>
<li id="text">a) model processes, services and session objects
<li id="text">b) process asynchronous messages.
<li id="text">c) model persistent data objects
<li id="text">d) none of the above.
</ul>

<a href="#a8">Answer to Q8</a>
</div>
<hr width="100%" align="left">





<p>
<div id="headingdesc">
<A NAME="q9">Q9)</a>
</div>

<div id="headingdesc">At Client, remote object proxy is termed as

<ul>
<li id="text">a) Stub
<li id="text">b) RemoteRef
<li id="text">c) Skeleton
<li id="text">d) None of the above
</ul>

<a href="#a9">Answer to Q9</a>
</div>
<hr width="100%" align="left">




<p>
<div id="headingdesc">
<A NAME="q10">Q10)</a>
</div>

<div id="headingdesc">In J2EE architecture, Enterprise Beans belongs to

<ul>
<li id="text">a) Client tier
<li id="text">b) Web tier
<li id="text">c) Business tier
<li id="text">d) EIS tier
</ul>

<a href="#a10">Answer to Q10</a>
</div>
<hr width="100%" align="left">




<center><h3> ANSWERS </h3></center>

<div id="headingdesc">
<A NAME="#a1">Q1)</a>
</div>

<div id="headingdesc">Answer : e</div>

<div id="headingdesc">Explanation : All the options (a, b, c, d) are correct.</div>

<div id="headingdesc">Encapsulation and Information Hiding are used interchangeably.</div>

<div id="headingdesc">Encapsulation is a language facility whereas data hiding is a design principle. Encapsulation means bundling of data and methods that operate on them within an object. Ideally this should imply that data related to an object is hidden and invisible outside the object. However, in Java we can define encapsulated data that is not hidden, by defining the instance variables of a class as public members.</div>

<div id="headingdesc">For example, in the following class definition, data related to class Chair (materialUsed) is encapsulated, but not hidden:

<pre>
public class Chair {
	public String materialUsed;
}
</pre>

</div>

<div id="headingdesc">
<a href="#q1">Return to Q1</a>
</div>
<hr width="100%" align="left">




<p><div id="headingdesc"><A NAME="#a2">Q2)</a></div>

<div id="headingdesc">Answer : b</div>

<div id="headingdesc">Explanation :
<ul>
<li id="text">a) Dependency is shown through dotted lines with arrow head.
<li id="text">c) Aggregation is represented through empty diamond at composed class.
<li id="text">d) Composition is represented through solid diamond at composed class.
</ul>

<a href="#q2">Return to Q2</a>
</div>
<hr width="100%" align="left">





<p>
<div id="headingdesc">
<A NAME="#a3">Q3)</a></div>

<div id="headingdesc">Answer : c </div>
<div id="headingdesc">Explanation : Clear triangle arrowhead pointing at super class from sub class is used to represent Generalization.
<ul>
<li id="text">a) Class A defines method 'method1(B b)', which accepts an instance of Class B as a method parameter. Class A is dependent on class B and hence this represents a dependency relationship.
<li id="text">b) Class A defines an instance of Class B, but B is not aware of Class A. Hence this represents association relationship.
<li id="text">d) Class A implements class B, hence this represents a realization relationship.
</ul>
<a href="#q3">Return to Q3</a>
</div>
<hr width="100%" align="left">



<p><div id="headingdesc">
<A NAME="#a4">Q4)</a></div>

<div id="headingdesc">Answer : a, d</div>
<div id="headingdesc">Explanation : Options b, c are true statements, as Java beans are java classes with coding conventions.</div>

<div id="headingdesc">Java bean classes can not define public instance variables.</div>

<div id="headingdesc">Properties of a Java bean are accessed through its corresponding 'get' and 'set' public accessor methods. For e.g., if a Java Bean defines public getName() and setName() methods, it defines a property 'name'. If a Java bean defines just the 'getter' method (getName), but no corresponding 'setter' method (setName), it defines a read-only property 'name'.</div>

<div id="headingdesc">It is important to note that the name of the property of a Java bean is not related to the name of the instance variable that is actually used to store the property value.</div>

<div id="headingdesc">All beans must support either Serialization or Externalization.</div>

<div id="headingdesc">Java bean must define a zero argument constructor. We can do this by explicitly defining a zero argument constructor, or by not defining any constructor. If a class does not defines any constructor, Java defines a no-argument constructor for it.</div>


<div id="headingdesc">
<a href="#q4">Return to Q4</a>
</div>
<hr width="100%" align="left">






<p><div id="headingdesc">
<A NAME="#a5">Q5)</a></div>

<div id="headingdesc">Answer : b</div>

<div id="headingdesc">Explanation : Class has one class variable "x" and one local variable "y".</div>

<div id="headingdesc"><a href="#q5">Return to Q5</a></div>
<hr width="100%" align="left">



<p><div id="headingdesc">
<A NAME="#a6">Q6)</a></div>

<div id="headingdesc">Answer : c</div>

<div id="headingdesc">Explanation : When an object is created using the 'new' keyword, it is placed on the Heap. Heap and Stack are two different data structures that are imaginary places in memory. All objects values are stored on heap, if they are created using "new" and their existence is managed by Garbage Collector. Variables, if created locally are stored on Stack and their lifetime depends on scope of the method.
</div>

<div id="headingdesc"><a href="#q6">Return to Q6</a></div>
<hr width="100%" align="left">


<p><div id="headingdesc">
<A NAME="#a7">Q7)</a></div>

<div id="headingdesc">Answer: b</div>

<div id="headingdesc">Explanation : String is immutable. The above code will print "Welcome to SCJA".</div>

<div id="headingdesc">+= will assign string concatenation result to strMsg, i.e., strMsg = strMsg + "to SCJA". While strMsg.concat("Certificate") creates a new string which is not assigned to any string variable.</div>

<div id="headingdesc">To print "Welcome to SCJA Certificate", strMsg.concat("certificate") should be assigned to a string variable, e.g., strMsg = strMsg.concat("Certificate");
</div>

<div id="headingdesc"><a href="#q7">Return to Q7</a></div>
</div>
<hr width="100%" align="left">



<p><div id="headingdesc">
<A NAME="#a8">Q8)</a></div>

<div id="headingdesc">Answer : c</div>

<div id="headingdesc">Explanation : Entity beans are persistent objects that are stored on permanent storage.

<ul>
<li id="text">a) Session beans represents business processes, services and session objects
<li id="text">b) Message driven beans are used to process asynchronous messages.
</ul>


<a href="#q8">Return to Q8</a></div>
<hr width="100%" align="left">




<p><div id="headingdesc">
<A NAME="#a9">Q9)</a></div>

<div id="headingdesc">Answers : a</div>

<div id="headingdesc">Explanation : In Client Server architecture remote object proxy is called Stub.

<ul>
<li id="text">b) RemoteRef : The Remote reference layer provides RemoteRef object that represents link to remote service implementation object.
<li id="text">c) Skeleton is a helper class that is used how to communicate with stub across RMI link.
</ul>
</div>

<div id="headingdesc"><a href="#q9">Return to Q9</a></div>

<hr width="100%" align="left">




<p><div id="headingdesc">
<A NAME="#a10">Q10)</a></div>

<div id="headingdesc"> Answer : c</div>

<div id="headingdesc">Explanation : Business code is handled by Enterprise beans running in business tier. It receives data from client programs, processes it and sends it to EIS (Enterprise Information System) for repository. Similarly EJB retrieves data from repository, processes it and sends it to the client.</div>

<div id="headingdesc"><a href="#q10">Return to Q10</a>
</div>



<p><br><p><br><p><br><p><br><p>

<p><br><p><br><p><br><p><br><p>




<h4>Feedback</h4>
<hr WIDTH="100%">

<div id="coursedesc">Please help us to improve this quiz by submitting your feedback.</div>

<p><form name="feedback" onSubmit="return checkDetails()" action="mockexamfeedback.php" method="post">
<input type="hidden" name="mockexam" value="SCJA">

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
			Rate the above SCJA Quiz
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