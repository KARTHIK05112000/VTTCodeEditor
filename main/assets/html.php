<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="css/html.css">
   <script src="https://kit.fontawesome.com/06ccafa28b.js" crossorigin="anonymous"></script>
    
    
    <title>HTML</title>
</head>
<body style="background: #303030;">
  <?php
    include("navbar.php");
    ?>
   
    <h1 id="hed">HTML TUTORIAL</h1>
   
   <div class="jumbotron" id="jdmb">
  <div class="container">
   <details><summary>Introduction</summary>
   
    <h3>What is HTML?</h3>
        <li id="list">HTML stands for Hyper Text Markup Language</li>
        <li id="list">HTML is the standard markup language for creating Web pages</li>
        <li id="list">HTML describes the structure of a Web page</li>
        <li id="list">HTML consists of a series of elements</li>
        <li id="list">HTML elements tell the browser how to display the content</li>
        <li id="list">HTML elements label pieces of content such as "this is a heading", "this is a paragraph", "this is a link", etc.</li>
        
        <div id="editor">
       <span class="dg">&#x3C;!DOCTYPE html&#x3E;</span><br>
       <span class="hg">&#x3C;html&#x3E;<br></span>
       <span class="heg">&#x3C;head&#x3E;<br></span>
       <span class="tg">&#x3C;title&#x3E;</span>Page Title<span class="tg">&#x3C;/title&#x3E;<br></span>

<span class="heg">&#x3C;/head&#x3E;</span><br>
       <span class="bg">&#x3C;body&#x3E;<br></span>

       <span class="h1g">&#x3C;h1&#x3E;</span>My First Heading<span class="h1g">&#x3C;/h1&#x3E;</span><br>
       <span class="pg">&#x3C;p&#x3E;</span>My first paragraph.<span class="pg">&#x3C;/p&#x3E;</span><br>

       <span class="bg">&#x3C;/body&#x3E;</span><br>
       <span class="hg">&#x3C;/html&#x3E;</span><br>
   </div>
        
       <h3>Example Explained</h3>
       <li id="list">The <span class="dg">&#x3C;!DOCTYPE html&#x3E;</span> declaration defines that this document is an HTML5 document</li>
       <li id="list">The <span class="hg">&#x3C;html&#x3E;</span> element is the root element of an HTML page</li>
       <li id="list">The <span class="heg">&#x3C;head&#x3E;</span> element contains meta information about the HTML page</li>
       <li id="list">The <span class="tg">&#x3C;title&#x3E;</span> element specifies a title for the HTML page (which is shown in the browser's title bar or in the page's tab)</li>
       <li id="list">The <span class="bg">&#x3C;body&#x3E;</span> element defines the document's body, and is a container for all the visible contents, such as headings, paragraphs, images, hyperlinks, tables, lists, etc.</li>
       <li id="list">The <span class="h1g">&#x3C;h1&#x3E;</span> element defines a large heading</li>
       <li id="list">The <span class="pg">&#x3C;p&#x3E;</span> element defines a paragraph</li>
        <h3>Output:</h3>
        <img src="img/img_chrome.png">

        </details>
  </div>
</div>
   <div class="jumbotron" id="jdmb">
  <div class="container">
      <details><summary>HTML Basics <p>In this chapter we will show some basic HTML examples.</p><p>

Don't worry if we use tags you have not learned about yet.</p></summary>
      
          <h3>HTML Documents</h3>
          <li id="list">All HTML documents must start with a document type declaration: <span class="dg">&#x3C;!DOCTYPE html&#x3E;</span>.</li>

          <li id="list">The HTML document itself begins with <span class="hg">&#x3C;html&#x3E;</span> and ends with <span class="hg">&#x3C;/html&#x3E;</span>.</li>

          <li id="list">The visible part of the HTML document is between <span class="bg">&#x3C;body&#x3E;</span> and <span class="bg">&#x3C;/body&#x3E;</span>.</li><br><br>
          <h3>The &#x3C;!DOCTYPE html&#x3E; Declaration</h3>
          <li id="list">The <span class="dg">&#x3C;!DOCTYPE html&#x3E;</span> declaration represents the document type, and helps browsers to display web pages correctly.</li>

          <li id="list">It must only appear once, at the top of the page (before any HTML tags).</li>

          <li id="list">The <span class="dg">&#x3C;!DOCTYPE html&#x3E;</span> declaration is not case sensitive.</li><br><br>
          
          <h3>HTML Headings</h3>
          <li id="list">HTML headings are defined with the <span class="h1g">&#x3C;h1&#x3E;</span> to <span class="h1g">&#x3C;h6&#x3E;</span> tags.</li>

          <li id="list"><span class="h1g">&#x3C;h1&#x3E;</span> defines the most important heading. <span class="h1g">&#x3C;h6&#x3E;</span> defines the least important heading.</li><br><br>
          
          <h3>  HTML Paragraphs</h3>
          <li id="list">HTML paragraphs are defined with the <span class="pg">&#x3C;p&#x3E;</span> tag.</li>
          
          <div id="editor">
       <span class="dg">&#x3C;!DOCTYPE html&#x3E;</span><br>
       <span class="hg">&#x3C;html&#x3E;<br></span>
       <span class="heg">&#x3C;head&#x3E;<br></span>
       <span class="tg">&#x3C;title&#x3E;</span>Page Title<span class="tg">&#x3C;/title&#x3E;<br></span>

<span class="heg">&#x3C;/head&#x3E;</span><br>
       <span class="bg">&#x3C;body&#x3E;<br></span>

       <span class="h1g">&#x3C;h1&#x3E;</span>My First Heading<span class="h1g">&#x3C;/h1&#x3E;</span><br>
       <span class="h1g">&#x3C;h2&#x3E;</span>My First Heading<span class="h1g">&#x3C;/h2&#x3E;</span><br>
       <span class="h1g">&#x3C;h3&#x3E;</span>My First Heading<span class="h1g">&#x3C;/h3&#x3E;</span><br>
       <span class="h1g">&#x3C;h4&#x3E;</span>My First Heading<span class="h1g">&#x3C;/h4&#x3E;</span><br>
       <span class="h1g">&#x3C;h5&#x3E;</span>My First Heading<span class="h1g">&#x3C;/h5&#x3E;</span><br>
       <span class="h1g">&#x3C;h6&#x3E;</span>My First Heading<span class="h1g">&#x3C;/h6&#x3E;</span><br>
       <span class="pg">&#x3C;p&#x3E;</span>My first paragraph.<span class="pg">&#x3C;/p&#x3E;</span><br>

       <span class="bg">&#x3C;/body&#x3E;</span><br>
       <span class="hg">&#x3C;/html&#x3E;</span><br>
   </div>
          <h3>Output:</h3>
          <img src="img/output2.png" alt="output2">
          
      </details></div></div>
      
     <div class="jumbotron" id="jdmb">
  <div class="container">
      <details><summary>HTML Links,Images,Lists <p>In this chapter we will show some  HTML Links,Images,Lists examples.</p></summary>
         <h2>HTML Links</h2>
         <h3>HTML Links - Syntax</h3>
          <li id="list">The HTML <span class="pg">&#x3C;a&#x3E; </span>tag defines a hyperlink.</li>
          <li id="list">The most important attribute of the <span class="pg">&#x3C;a&#x3E;</span> element is the href attribute, which indicates the link's destination.</li>

          <li id="list">The link text is the part that will be visible to the reader.</li>

          <li id="list">Clicking on the link text, will send the reader to the specified URL address.</li>
          
          <h3>HTML Links - The target Attribute</h3>
<li id="list">By default, the linked page will be displayed in the current browser window. To change this, you must specify another target for the link.

<li id="list">The target attribute specifies where to open the linked document.

<li id="list">The target attribute can have one of the following values:
<ol>
    <li id="list"><span class="dg">_self</span> - Default. Opens the document in the same window/tab as it was clicked</li>
    <li id="list"><span class="dg">_blank </span>- Opens the document in a new window or tab</li>
    <li id="list"><span class="dg">_parent </span>- Opens the document in the parent frame</li>
    <li id="list"><span class="dg">_top</span> - Opens the document in the full body of the window</li></ol>

          
          </details></div></div>
</body>
</html>