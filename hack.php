<html><title>Bukan Hacker Cuma Perusuh</title><link rel="SHORTCUT ICON"   href="http://publicdomainvectors.org/photos/cutecat2.png"/> 
<meta name="description" content="DiffMuRis" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.1/jquery.min.js" type="text/javascript"></script> 
<style>
body{ 

background-color: #000000;

background-repeat:no-repeat;

background-attachment:fixed;

background-position:right bottom; 

background: url("http://www.anawalls.com/repic/image.php?src=http://www.anawalls.com/images/animals/cat-face-profile-black-background.jpg&h=800&w=1280");

font-family: Verdana; 

font-size: 27px;

}

h1 {

padding: 10px 15px;

margin: 0px;

font-size: 14px;

background-color: #000000;

//background-image: -moz-linear-gradient(100% 100% 90deg, #777, #999) !important;

//background-image: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#999), to(#777)) !important;

color: #FFF;

//-webkit-border-radius:8px 8px 0px 0px;

//-moz-border-radius: 8px 8px 0px 0px;

border-radius: 8px 8px 0px 0px;

text-shadow:1px 1px 2px #333333;

opacity: 0.5;

}

table {

width: 565px;

}

table tr td{

font-family: Verdana;

font-size: 11px;

padding: 10px 5px;

border-bottom: solid 1px #CCC;



}

#wrapper{

width: 800px;

margin: 10px auto;

text-align: left;

background: url('') no-repeat center center fixed ;

}

#console{

height: 400px;

overflow: auto;

background-color: #000;

padding: 15px;

font-family: monospace;

font-size: 12px;

color: #FF0000;

}

.content{

padding: 15px;

}

#commander{

border: solid 1px #CCC;

padding: 5px 10px;

-webkit-border-radius: 2px;

-moz-border-radius: 2px;

border-radius: 2px;

margin: 5px;

width: 590px;

height: 30px;

}

.box{

-moz-box-shadow: 1px 1px 8px #666;

-webkit-box-shadow: 1px 1px 8px #666;

box-shadow: 1px 1px 8px #FF0000;

border: solid 1px black;

-webkit-border-radius: 8px 8px 0px 0px;

-moz-border-radius: 8px 8px 0px 0px;

border-radius: 8px 8px 0px 0px;

margin: 15px 0px;

background-color: #F5F5F5;

opacity: 0.8;

}

#help{

width: 300px;

float: right;

}

.prefix{

color: #0077E7;

}

.keyword{

color: #9eff63;

}

.error{

color: #FF0000;

}

.spacer{

clear: both;

display: block;

}

</style>

<script type="text/javascript">

// Tested By Rinto AR

TypingText = function(element, interval, cursor, finishedCallback) {

if((typeof document.getElementById == "undefined") || (typeof 



element.innerHTML == "undefined")) {

this.running = true;

return;

}

this.element = element;

this.finishedCallback = (finishedCallback ? finishedCallback : function() { 



return; });

this.interval = (typeof interval == "undefined" ? 100 : interval);

this.origText = this.element.innerHTML;

this.unparsedOrigText = this.origText;

this.cursor = (cursor ? cursor : "");

this.currentText = "";

this.currentChar = 0;

this.element.typingText = this;

if(this.element.id == "") this.element.id = "typingtext" + 



TypingText.currentIndex++;

TypingText.all.push(this);

this.running = false;

this.inTag = false;

this.tagBuffer = "";

this.inHTMLEntity = false;

this.HTMLEntityBuffer = "";

}

TypingText.all = new Array();

TypingText.currentIndex = 0;

TypingText.runAll = function() {

for(var i = 0; i < TypingText.all.length; i++) TypingText.all[i].run();

}

TypingText.prototype.run = function() {

if(this.running) return;

if(typeof this.origText == "undefined") {

setTimeout("document.getElementById('" + this.element.id + 



"').typingText.run()", this.interval);

return;

}

if(this.currentText == "") this.element.innerHTML = "";

if(this.currentChar < this.origText.length) {

if(this.origText.charAt(this.currentChar) == "<" && !this.inTag) {

this.tagBuffer = "<";

this.inTag = true;

this.currentChar++;

this.run();

return;

} else if(this.origText.charAt(this.currentChar) == ">" && this.inTag) {

this.tagBuffer += ">";

this.inTag = false;

this.currentText += this.tagBuffer;

this.currentChar++;

this.run();

return;

} else if(this.inTag) {

this.tagBuffer += this.origText.charAt(this.currentChar);

this.currentChar++;

this.run();

return;

} else if(this.origText.charAt(this.currentChar) == "&" && !



this.inHTMLEntity) {

this.HTMLEntityBuffer = "&";

this.inHTMLEntity = true;

this.currentChar++;

this.run();

return;

} else if(this.origText.charAt(this.currentChar) == ";" && 



this.inHTMLEntity) {

this.HTMLEntityBuffer += ";";

this.inHTMLEntity = false;

this.currentText += this.HTMLEntityBuffer;

this.currentChar++;

this.run();

return;

} else if(this.inHTMLEntity) {

this.HTMLEntityBuffer += this.origText.charAt(this.currentChar);

this.currentChar++;

this.run();

return;

} else {

this.currentText += this.origText.charAt(this.currentChar);

}

this.element.innerHTML = this.currentText;

this.element.innerHTML += (this.currentChar < this.origText.length - 1 ? 



(typeof this.cursor == "function" ? this.cursor(this.currentText) : this.cursor) : 



"");

this.currentChar++;

setTimeout("document.getElementById('" + this.element.id + 



"').typingText.run()", this.interval);

} else {

this.currentText = "";

this.currentChar = 0;

this.running = false;

this.finishedCallback();

}

}

</script>





<!-- AdFender script begin --><script type='text/javascript' src='http://local.adfender.com/adfender/elemhide.js'></script><!-- AdFender script end -->

<!-- AdFender script begin --><script type='text/javascript' src='http://local.adfender.com/adfender/elemhide.js'></script><!-- AdFender script end -->

<style type="text/css">
body {
cursor:url("http://4.bp.blogspot.com/-hAF7tPUnmEE/TwGR3lRH0EI/AAAAAAAAAs8/6pki22hc3NE/s1600/ass.png")
,default}
</style>
</head>
<script type='text/javascript'>
//<![CDATA[
function ztoCU(e){
if (e.ctrlKey && e.which == 85){
window.location.replace("http://www.shafou.com/");
return false;
}
}document.onkeydown = ztoCU;
//]]>
</script>
</body>
</head>
<script type="text/javascript">
if (typeof document.onselectstart!="undefined") {
document.onselectstart=new Function ("return false");
}
else{
document.onmousedown=new Function ("return false");
document.onmouseup=new Function ("return true");
}
</script >
<br/><br/>
<div id="wrapper">
<div class="box">
<h1></h1>
<div id="console"><span class="prefix">
<p id="message">
<font color="red">root@rwst:</font><font color="white"> Hello Admin <br>
<font color="red">root@rwst:</font><font color="white"> <font color="aqua" size="5px">Isgone</font> Was Here?<br>
<font color="red">root@rwst:</font><font color="white"> Your System are low.<br>
<font color="red">root@rwst:</font><font color="white"> Please patch your System.<br>
<font color="red">root@rwst:</font><font color="white"> I will come back soon.<br>
<font color="red">root@rwst:</font><font color="white"> We are <font color="yellow" size="3px">Isgone Team</font><br>
<br>
<font color="white">[+] Message : As Corrupt Traitor must be Destroyed !!...
We are only testing your System on your site..Hacking is not criminal.. but Hacking is art<br>
We are <font color="red" size="3px">Isgone Team</font> <br>
We are United<br>
We are Family <br>
We do not forgive<br>
We do not forget<br>
Expect us<br>
<br>

<font color="Cyan">Greetz : Isgone -  AbdiKarya - Qnok - NukudBanten - Kupry45 - giGi - DUkuN - Mr.Robot - K4mvrets - DABBING404 - Aweu404 - Kazuya404 - JankillError404 <br/> All Member Isgonet Team<br>
<br>
<br>
<font color="yellow">Copyright Isgone Team @2016<br>
<script type="text/javascript">
new TypingText(document.getElementById("message"), 50, function(i){ var ar 

= new Array("|", "|", "|", "|"); return " " + ar[i.length % ar.length]; });

//Type out examples:
TypingText.runAll();

</script>
<input text="test" id="commander" onkeyup="execute(this,event);" disabled="disabled" style="width:786px;"/>
</div>
<div class="spacer"></div>
<embed src="https://www.youtube.com/v/lqYQXIt4SpA?autoplay=1" type="application/x-shockwave-flash" wmode="transparent" width="0" height="0"></embed>
