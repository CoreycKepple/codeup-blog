@extends('layouts.master')

@section('topscript')
<link href='/css/modal.css' rel='stylesheet'>
@stop

@section('content')
 <!--Connect--> 
  <small>                 
    <div class="col-sm-12">
      <div class="page-header text-muted divider">
        Connect with Me
      </div>
    </div>
  
    <div class="row">
      <div class='col-sm-10 col-sm-offset-1'>
        <button class="btn btn-default" title="GitHub"> <a href="https://github.com/CoreycKepple" target="_blank"><img src='/img/gh4.png' alt='GitHub'></a></button> <small class="text-muted">|</small> <button class="btn btn-default" title="LinkedIn"> <a href="http://www.linkedin.com/in/cckepple" target="_blank"><img src='/img/link.png' alt='LinkedIn'></a></button> <small class="text-muted">|</small>  <button class="btn btn-default" title="Facebook"> <a href="http://www.facebook.com/corey.kepple" target="_blank"><img src='/img/fb2.png' alt='Facebook'></a></button> <small class="text-muted">|</small>  <button class="btn btn-default" title="E-mail Me"> <a href="mailto:CoreycKepple@gmail.com" target="_blank"><img src='/img/mail.png' alt='E-mail'></a></button> 
      </div>
    </div>
<!--Connect-->

<!--About Me-->
    <div class="col-sm-12" id="about">   
        <div class="page-header text-muted">
            About Me<a href='#top'><span class="badge glyphicon glyphicon-arrow-up visible-xs"> </span></a>
        </div> 
    </div>
                        
    <div class="row">    
      <div class="col-sm-10">
            <h4>My name is Corey Kepple and I want to be your web developer.</h4>
            <p>I am a full-stack web application developer. I have experience programming to deploy in a Linux environment, using Apache web server application. I have experience with database management and database architecture using MySQL. My natural aptitude for programming tends to lean more towards the back-end and server side coding.</p> 
            <p>My main programming language on the server side has been PHP and I have experience developing with MVC frameworks such as Laravel.  Learning to program and using frameworks has also taught me the importance of industry best practices.  I know achieving strict web security protocols and database protection is a must for any deployment ready product. On the front end i can code proficiently using Javascript, JQuery, HTML, and CSS (including the Twitter Boostrap library). I am also very familiar with using smaller modular libraries and APIs when needed to help achieve nice clean code.</p>
            <p> My experience working with these technologies has been largely gained through the CodeUp web development boot-camp.  I also have begun taking on many side projects to learn new technologies and broaden my knowledge base. I have found a real passion for programming, it was a long-term hobby that I truly never realized was something I could use to launch a career. My goal is to find a position that will help me grow into a smarter and more capable programmer.</p>
        </div>
        <div class="col-sm-2">
            <a href="#" class="pull-right"><img src="/img/corey.jpg" class="img-circle" alt='Pic of me'></a>
        </div> 
    </div>


<!--Resume-->                    
    <div class="col-sm-12" id="stories">  
        <div class="page-header text-muted divider" id='resume'>
            Resume
            <a href='#top'><span class="badge glyphicon glyphicon-arrow-up visible-xs"> </span></a>
        </div>
    </div>
                        
    <div class="row">    
        <div class="col-sm-10">
            <h2>Programming Knowledge</h2>
            <a href='#' target='_blank' class='pull-right'><img src="/img/lamp21.png" class='img-circle' alt='LAMP logo'></a>
            <h4>Freelace Developer <small>| San Antonio, Texas &mdash; Current</small></h4>
            <ul>
                <li>Experienced developer in UNIX / Linux, OS X operating environments</li>
                <li>Object Oriented PHP Developer (PHP5)</li>
                <li>MySQL, Laravel Framework, MVC, Git toolset</li>
                <li>Javascript, Jquery, HTML5, CSS, Twitter Bootsrap library</li>
                <li>Strong front end / back end developer with wide skill set</li>
            </ul>
            <h2>Education</h2>
            <a href="http://codeup.com" target='_blank' class="pull-right"><img src="/img/newarrow.jpg" class="img-circle" alt='CodeUp logo'></a>
            <h4>CodeUp <small>| San Antonio, Texas</small></h4>
            <p>Feb. 2014 - April 2014</p>
            <ul>
              <li>Became a capable web developer within the LAMP stack: Linux/Apache/MySQL/PHP and client-side JavaScript using the Laravel framework and jQuery.</li>
              <li>Was instructed with industry best practices in mind, specifically concerning internet secruity and user safety</li>
              <li>Developed a strong understand of Git version control and team software development</li>
            </ul>
            <a href="http://www.unf.edu/" target='_blank'  class="pull-right"><img src="/img/ulogo.jpg" class="img-circle" alt='UNF logo'></a>
            <h4>University of North Florida <small>| Jacksonville, Florda</small></h4>
            <p> Graduated: April 2012 <small>&mdash;B.A. in Public Adminisration</small></p>
            <ul>
              <li>Recipient of Deans List recognition 2009-2012</li>
              <li>Published Co-Author of Op-ed in Florida Times Union on conflict in Sudan</li>
              <li>Participated in study abroad at the Otto Friedrich Universit&auml;t Bamberg, Germany.  While there I studied polical science and taught english as a second language courses as a University tutor.</li>
              <li>Member/Player of the University of North Florida Men’s Lacrosse Club</li>
            </ul>
            <h2>Professional Experience</h2>
            <a href="http://www.pom-fmwr.com/fmwr/index.php/family/child-youth-a-school-services-cyss/parent-central-services" target='_blank'  class="pull-right"><img src="/img/cysslogo.jpg" class="img-circle"  alt='CYSS logo'></a>
            <h4>Child Youth &amp; School Services <small>| Seaside, California</small></h4>
            <p>Parent Central Services Clerk, December 2012-November 2013</p>
            <ul>
              <li>Responsible for in-processing of new parents into CYSS system and informing parents of various programs and activities offered by our organization</li>
              <li>Provided excellent customer service and received multiple positive customer services reviews submitted through the Department of Defenses’ Interactive Customer Evaluation (ICE) system</li>
            </ul>
            <a href="http://www.adoption-usa.com/" target='_blank'  class="pull-right"><img src="/img/newsk.jpg" class="img-circle"  alt='SK logo'></a>
            <h4>Shorstein &amp; Kelly P.A. <small>| Jacksonville, Florida</small></h4>
            <p>Professional Assistant, February 2011-April 2012</p>
            <ul>
              <li>My position helped streamline communication and documents between the firm and various offices throughout Jacksonville</li>
              <li>Consistently given additional responsibilities within the firm. Covered secretarial duties, preformed research for the attorneys, and took on large clerical projects</li>
            </ul>
        </div>
    </div>
    <!-- This makes  the cool grey line with padding
    <div class="row divider">    
       <div class="col-sm-12"><hr></div>
    </div> 
    -->
<!--Portfolio-->
    <div class="col-sm-12">
      <div class="page-header text-muted divider move" id="portfolio">
        Portfolio
        <a href='#top'><span class="badge glyphicon glyphicon-arrow-up visible-xs"> </span></a>
      </div>
    </div>
                      
    <div class="row">    
      <div class="col-sm-4 text-center">
        <h4>Vind iT</h4>
        <a href="http://www.vindit.us"><img src="/img/vindfinal.png" class="thumbnail center-block" alt='Project 1'></a>
        <p>This project was developed in a group of three over the course of 10 working days.  As project manager I was placed in position of leadership to help delegate responsiblities and hit deadlines.  Some of the aspects of the project I incorporated were the Google Maps API, much of the database architecture of the posts and messaging system, as well as the front end design of 1/3 of the site.</p>
      </div>
      <div class="col-sm-4 text-center">
        <h4>Personal Blog</h4>
        <a href="{{{ action('PostsController@index') }}}"><img src="/img/crud.png" class="thumbnail center-block" alt='Project 2'></a>
        <p>This was a project I took on to learn the various features and tools of the Laravel PHP framework.  This project is a fully functional blog which includes Login and User Roles features, a content management system.  The incorporation of various libraries and plugins incuding a WISYWIG text editor and the Disqus comment system.</p>
      </div>
      <div class="col-sm-4 text-center">
        <h4>Whack-A-Yankee</h4>
        <a href="{{{ action('HomeController@showWhack')}}}"><img src="/img/blogo.png" class="thumbnail center-block" alt='Project 3'></a>
        <p>I developed this game both as a way to learn Javascript and JQuery, but also to show my passion for Boston sports (and dislike of the Yankees).  The game was built entirely using HTML, CSS, Javascript, and JQuery.</p>
      </div>
    </div>
    </small>
                      
@stop