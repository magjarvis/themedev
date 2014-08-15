<div id="page-wrap">

	<div id="header">
    
     <div id="inrsbar">
      <span class="inrstxt">
        <a href="http://www.prairie.illinois.edu" class="IE6white">Prairie Research Institute</a>
      </span>
      <span class="uiuctxt">
        <a href="http://www.illinois.edu" class="IE6white">University of Illinois at Urbana-Champaign</a>
      </span>
    </div><!--end inrsbar -->
    
    <div id="surveys">
      <h2 class="hidden">INRS State Scientific Surveys</h2>
      <ul>
        <li class="first"><a href="http://www.inhs.illinois.edu/">Illinois Natural History Survey</a></li>
        <li class="navmarker">|</li>
        <li><a href="http://www.itarp.illinois.edu">Illinois State Archaeological Survey</a></li>
        <li class="navmarker">|</li>
        <li><a href="http://isgs.illinois.edu" class="selectedsurvey">Illinois State Geological Survey</a></li>
        <li class="navmarker">|</li>
        <li><a href="http://www.isws.illinois.edu">Illinois State Water Survey</a></li>
        <li class="navmarker">|</li>
        <li><a href="http://www.istc.illinois.edu">Illinois Sustainable Technology Center</a></li>
      </ul>
    </div><!--end surveys -->
    
    <div id="bannerimage">
      <span id="surveyname">
        <a href="http://isgs.illinois.edu"><h1 class="logo"><span></span>Illinois State Geological Survey</h1></a>
      </span>
      
      <span id="uilogo">
        <a href="http://www.illinois.edu" target="_blank"><h2 class="logo"><span></span>Illinois University Urbana-Champaign</h2></a>
      </span>
    </div><!--end bannerimage -->
    
    <div id="NAVBar">
      <div id="navlinks">
        <h2 class="hidden">Navigation</h2>
        <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('class' => array('links', 'clearfix')))); ?>
      </div><!--end navlinks -->
    </div><!--end NAVBar -->
    </div><!--end header -->

<?php print $messages; ?>
  
<div id="main-content">

    <div id="content">
    
    <?php print render($page['content']); ?>
    
    </div><!--end content -->
    
    <div id="sidebar">
    <?php print render($page['sidebar']); ?>
    </div><!--end sidebar -->

</div><!--end main-content -->



    <div id="footerArea">
      <div id="bcol1">
      <h3 class="section-title"><a href="http://isgs.illinois.edu">Illinois State Geological Survey</a></h3><br />
      <p class="copyright"><a href="/about-isgs/staff-directory/richard-c-berg">Richard C. Berg, Interim Director</a>
       <br />
      615 E. Peabody<br />
      Champaign, IL  61820<br />
      217-333-4747<br />
      <a href="mailto:info@isgs.illinois.edu">info@isgs.illinois.edu</a>
      </p>
    </div>
    
    <div id="bcol2">
      <p class="copyright">
      &#169; <?php echo date("Y"); ?> University of Illinois Board of Trustees. All rights reserved.
      <br />
      For permissions information, contact the Illinois State Geological Survey.
      <br /><br />
      <a href="/terms-use">Terms of use
      &nbsp; &nbsp; &nbsp; &nbsp; 
      <a href="/privacy-statement">Privacy Statement</a>
      &nbsp; &nbsp; &nbsp; &nbsp; 
      <a href="https://staff.isgs.illinois.edu/" target="_blank">Staff Only</a>
      &nbsp; &nbsp; &nbsp; &nbsp; 
      <a href="https://www.isgs.illinois.edu/user" >Log in</a>
      <br /><br />
      </p>
    </div>
    </div><!--end footerArea -->

</div><!--end page-wrap -->
