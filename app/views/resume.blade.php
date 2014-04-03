@extends('layouts.master')

@section('topscript')
<link href='/css/modal.css' rel='stylesheet'>
@stop

@section('content')
  <!--About Me-->
    <div class="col-sm-12" id="about">   
        <div class="page-header text-muted">
            About Me<a href='#top'><span class="badge glyphicon glyphicon-arrow-up visible-xs"> </span></a>
        </div> 
    </div>
                        
    <div class="row">    
      <div class="col-sm-10">
            <h4>My name is Corey Kepple and I want to be your web developer.</h4>
            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic, laudantium, illo natus vel nihil et sapiente sequi eum harum tempore odio doloremque quisquam nostrum asperiores quasi voluptates inventore unde enim.</p>
        </div>
        <div class="col-sm-2">
            <a href="#" class="pull-right"><img src="/img/corey.jpg" class="img-circle" alt='Pic of me'></a>
        </div> 
    </div>

 <!--Connect-->                  
    <div class="col-sm-12">
      <div class="page-header text-muted divider">
        Connect with Me
      </div>
    </div>
  
    <div class="row">
      <div class='col-sm-10 col-sm-offset-1'>
        <button class="btn btn-default" title="GitHub"> <a href="https://github.com/CoreycKepple" target="_blank"><img src='/img/gh4.png' alt='GitHub'></a></button> <small class="text-muted">|</small> <button class="btn btn-default" data-toggle="modal" data-target="#myModal1" title="LinkedIn"> <a href="http://www.linkedin.com/in/cckepple" target="_blank"><img src='/img/link.png' alt='LinkedIn'></a></button> <small class="text-muted">|</small>  <button class="btn btn-default" title="Facebook"> <a href="http://www.facebook.com/corey.kepple" target="_blank"><img src='/img/fb2.png' alt='Facebook'></a></button> <small class="text-muted">|</small>  <button class="btn btn-default" title="E-mail Me"> <a href="mailto:CoreycKepple@gmail.com" target="_blank"><img src='/img/mail.png' alt='E-mail'></a></button> 
      </div>
    </div>

   <!-- Modal -->
    <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel1">Corey Kepple <small>Web Application Developer</small></h4>
          </div>
          <div class="modal-body">
            <script src="http://platform.linkedin.com/in.js" type="text/javascript"></script>
            <script type="IN/MemberProfile" data-id="http://www.linkedin.com/in/cckepple"
            data-format="inline"></script>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div> <!-- #/myModal -->
<!--Connect-->  

<!--Resume-->                    
    <div class="col-sm-12" id="stories">  
        <div class="page-header text-muted divider" id='resume'>
            Resume
            <a href='#top'><span class="badge glyphicon glyphicon-arrow-up visible-xs"> </span></a>
        </div>
    </div>
                        
    <div class="row">    
        <div class="col-sm-10">
            <h2>Education</h2>
            <a href="http://codeup.com" target='_blank' class="pull-right"><img src="/img/newarrow.jpg" class="img-circle" alt='CodeUp logo'></a>
            <h4>CodeUp <small>| San Antonio,Texas</small></h4>
            <p>Feb. 2014 - April 2014</p>
            <ul>
              <li>Learned to develop and deploy web applications in the LAMP stack</li>
              <li>Worked with various frameworks including laravel, bootstrap, jQueiry</li>
              <li>Learned to work both independelty and in group settings to acheive set goals in specified periods of time</li>
              <li>Created many projects including a final Kapstone Project</li>
            </ul>
            <a href="http://www.unf.edu/" target='_blank'  class="pull-right"><img src="/img/ulogo.jpg" class="img-circle" alt='UNF logo'></a>
            <h4>University of North Florida <small>| Jacksonville, Florda</small></h4>
            <p> Graduated: April 2012</p>
            <ul>
              <li>Earned a B.A. in Public Administration, GPA in Major (10 Courses): 3.79, Overall: 3.33/4.0</li>
              <li>Recipient of Deans List recognition 2009-2012</li>
              <li>Published Co-Author of Op-ed in Florida Times Union on conflict in Sudan</li>
              <li>Member/Player of the University of North Florida Men’s Lacrosse Club</li>
              <li>Participated in study abroad at the Otto Friedrich Universit&auml;t Bamberg, Germany.  During my semester there I studied polical science and taught english as a second language courses as a University tutor.</li>
            </ul>
            <h2>Professional Experience</h2>
            <a href="http://www.pom-fmwr.com/fmwr/index.php/family/child-youth-a-school-services-cyss/parent-central-services" target='_blank'  class="pull-right"><img src="/img/cysslogo.jpg" class="img-circle"  alt='CYSS logo'></a>
            <h4>Child Youth &amp; School Services <small>| Seaside, California</small></h4>
            <p>Parent Central Services Clerk, December 2012-November 2013</p>
            <ul>
              <li>Responsible for in-processing of new parents into CYSS system and informing parents of various programs and   activities offered by our organization</li>
              <li>Maintained both the physical and digital database of household information for CYSS, over 2,000 active  households</li>
              <li>Provided excellent customer service and received multiple positive customer services reviews submitted  through the Department of Defenses’ Interactive Customer Evaluation (ICE) system</li>
            </ul>
            <a href="http://en.wikipedia.org/wiki/Organizing_for_America" target='_blank'  class="pull-right"><img src="/img/ofalogo.jpg" class="img-circle"  alt='OFA logo'></a>
            <h4>Organizing for America <small>| Las Vegas, Nevada</small></h4>
            <p>Summer Organizer, June 2012-August 2012</p>
            <ul>
              <li>Gained experience in volunteer recruitment, team building, and team management</li>
              <li>Organized events, delegated responsibilities, and helped create a local campaign
                      infrastructure from the community I was responsible for overseeing</li>
            </ul>
            <a href="http://www.adoption-usa.com/" target='_blank'  class="pull-right"><img src="/img/newsk.jpg" class="img-circle"  alt='SK logo'></a>
            <h4>Shorstein &amp; Kelly P.A. <small>| Jacksonville, Florida</small></h4>
            <p>Professional Assistant, February 2011-April 2012</p>
            <ul>
              <li>My position helped streamline communication and documents between the firm and various offices  throughout  Jacksonville</li>
              <li>Consistently given additional responsibilities within the firm. Covered secretarial duties,   preformed   research for the attorneys, and took on large clerical projects</li>
            </ul>
        </div>
    </div>
    <!-- This makes  the cool grey line
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
        <h4>Blog Project</h4>
        <a href="{{{ action('PostsController@index') }}}"><img src="/img/crud.png" class="thumbnail center-block" alt='Project 1'></a>
        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, unde, incidunt, numquam fuga hic quaerat veritatis ad iste perspiciatis eaque quod consequatur cupiditate aliquam dolorem quasi reiciendis porro officia quia.</p>
      </div>
      <div class="col-sm-4 text-center">
        <h4>Todo list</h4>
        <a href="{{{ action('HomeController@showTodo') }}}"><img src="/img/todo.png" class="thumbnail center-block" alt='Project 2'></a>
        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, unde, incidunt, numquam fuga hic quaerat veritatis ad iste perspiciatis eaque quod consequatur cupiditate aliquam dolorem quasi reiciendis porro officia quia.</p>
      </div>
      <div class="col-sm-4 text-center">
        <h4>Whack-A-Yankee</h4>
        <a href="{{{ action('HomeController@showWhack')}}}"><img src="/img/blogo.png" class="thumbnail center-block" alt='Project 3'></a>
        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, unde, incidunt, numquam fuga hic quaerat veritatis ad iste perspiciatis eaque quod consequatur cupiditate aliquam dolorem quasi reiciendis porro officia quia.</p>
      </div>
    </div>
    <div class="row">    
      <div class="col-sm-4 text-center">
        <h4>Blog</h4>
        <a href="{{{ action('PostsController@index') }}}"><img src="/img/codeup-ribbon.png" class="thumbnail center-block" alt='Project 1'></a>
        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, unde, incidunt, numquam fuga hic quaerat veritatis ad iste perspiciatis eaque quod consequatur cupiditate aliquam dolorem quasi reiciendis porro officia quia.</p>
      </div>
      <div class="col-sm-4 text-center">
        <h4>Todo list</h4>
        <a href="{{{ action('HomeController@showTodo') }}}"><img src="/img/todo.png" class="thumbnail center-block" alt='Project 2'></a>
        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, unde, incidunt, numquam fuga hic quaerat veritatis ad iste perspiciatis eaque quod consequatur cupiditate aliquam dolorem quasi reiciendis porro officia quia.</p>
      </div>
      <div class="col-sm-4 text-center">
        <h4>Whack-A-Yankee</h4>
        <a href="{{{ action('HomeController@showWhack')}}}"><img src="/img/blogo.png" class="thumbnail center-block" alt='Project 3'></a>
        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, unde, incidunt, numquam fuga hic quaerat veritatis ad iste perspiciatis eaque quod consequatur cupiditate aliquam dolorem quasi reiciendis porro officia quia.</p>
      </div>
    </div>
                      
@stop