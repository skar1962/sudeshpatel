<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Who am Il</title>
		<meta charset="utf-8">

        <!-- ========================================================================
            Icons used are from http://fontawesome.io/icons/



        ============================================================================= -->

		<!-- meta tag required by Bootstrap fpr mobile first development-->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap stylesheet -->

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">


        <!-- Custom styles for this bootstrap template -->
        <link href="album.css" rel="stylesheet">
        
		<!-- My style sheet -->
        <link rel="stylesheet" type="text/css" href="styles.css" > 
        
        <!-- Stylesheet for timeline -->
        <link rel="stylesheet" type="text/css" href="timeline1.css" >

<!--
	To Do:
-->

	</head>
    <body>
        <?php require_once 'includes/header.php'; ?>	

        <main role="main">
            <section class="jumbotron text-center">
                <div class="container">
                    <h1 class="jumbotron-heading">Who am I?</h1>
                    <p class="lead text-muted">A brief timeline of my career history is shown below.  <br>
                    Having successfully delivered my targets and finishing my last role at VitalPAC, 
                    I finally have time to enjoy doing the things I want to do such as travel, cooking, DIY and web development.
                    I also have some spare time to use my brain and help 
                    children to pass their primary school exams (11+) for entrance into selective UK based schools.
                    </p>
                </div>
            </section>

            <!-- Start of timeline 1 -->

        
            <div class="container">
                <div class="page-header">
                    <h1 id="timeline">Career Timeline</h1>
                </div>
                <ul class="timeline">

                    <!-- VitalPAC =================================== -->
                    <li>
                        <div class="timeline-badge success"><i class="fa fa-mobile" aria-hidden="true"></i></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="timeline-title">
                                    <a target="_blank" href="http://vitalpac.com/"> VitalPAC <i class="fa fa-external-link" aria-hidden="true"></i></a>
                                </h4>
                                <p><small class="text-muted"></i> Nov 2015 - May 2017</small></p>
                            </div>
                            <div class="timeline-body">
                                <p><strong>Senior Director of Development</strong></p>
                                <ul>
                                    <li> Responsible for development and delivery of all VitalPAC mobile product lines.</li>
                                    <li> Transformed organisation so that its products could be delivered to an acceptable level of quality, budget and time. </li>
                                    <li> Increased product quality through Agile testing methodologies, test automation and Test Driven Development.</li>
                                    <li> Implemented the <a target="_blank" href="http://www.scaledagileframework.com/"> SAFe Agile framework <i class="fa fa-external-link" aria-hidden="true"></i></a></li>
                                    <li> Introduced new tooling to aid development, testing and product delivery</li>
                                </ul>
                                <p> <em>Decided to leave the business and persue personal goals once above changes were successfully implemented.</em>
                                </p>
                            </div>
                        </div>
                    </li>

                    <!-- System C Senior Dev Director =================================== -->
                    <li class="timeline-inverted">
                        <div class="timeline-badge primary"><i class="fa fa-briefcase" aria-hidden="true"></i></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="timeline-title">
                                        <a target="_blank" href="https://www.systemc.com/"> System C Limited <i class="fa fa-external-link" aria-hidden="true"></i></a>
                                    </h4>
                                    <p><small class="text-muted"></i> Jun 2014 - Nov 2015</small></p>
                                </div>
                                <div class="timeline-body">
                                    <p><strong>Senior Director of Development</strong></p>
                                    <ul>
                                        <li> Responsible for development and delivery of multiple product lines including the Medway 
                                        <a target="_blank" href="https://en.wikipedia.org/wiki/Hospital_information_system"> Hospital Information system <i class="fa fa-external-link" aria-hidden="true"></i></a>, Maternity, Proxima, and Medway BI.</li>
                                        <li> Increased productivity, product quality and reduced development cost.</li>
                                        <li> Implemented the <a target="_blank" href="http://www.scaledagileframework.com/"> SAFe Agile framework <i class="fa fa-external-link" aria-hidden="true"></i></a></li>
                                        <li> Implemented test automation </li>
                                    </ul>
                                    <p> <em>Due to the success of the changes I implemented, I moved onto leading the VitalPAC to implement the same changes.</em>
                                    </p>
                            </div>
                        </div>
                    </li>

                    <!-- McKesson =================================== -->
                    <li>
                        <div class="timeline-badge warning"><i class="fa fa-globe" aria-hidden="true"></i></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="timeline-title">
                                    <a target="_blank" href="http://www.mckesson.com/"> McKesson UK <i class="fa fa-external-link" aria-hidden="true"></i></a>
                                </h4>
                                <p><small class="text-muted"></i> May 2011 - Jun 2014</small></p>
                            </div>
                            <div class="timeline-body">
                                <p><strong>Senior Director of Development</strong></p>
                                <ul>
                                    <li> Responsible for development and delivery of multiple product lines including the Medway 
                                    <a target="_blank" href="https://en.wikipedia.org/wiki/Hospital_information_system"> Hospital Information system <i class="fa fa-external-link" aria-hidden="true"></i></a>, Maternity, Proxima, and Medway BI.</li>
                                    <li> Doubled the size of the development team to allow globalisation of the Medway product.</li>
                                    <li> Implemented McKesson's Application Life Cycle management methodology for scaled software delivery</li>
                                </ul>
                                <p> <em>After two years, System C re-aquired the Medway product and customer base from McKesson. </em>
                                </p>
                            </div>
                        </div>
                    </li>

                    <!-- System C CTO =================================== -->
                    <li class="timeline-inverted">
                        <div class="timeline-badge primary"><i class="fa fa-briefcase" aria-hidden="true"></i></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="timeline-title">
                                    <a target="_blank" href="https://www.systemc.com/"> System C Limited <i class="fa fa-external-link" aria-hidden="true"></i></a>
                                </h4>
                                <p><small class="text-muted"></i> Aug 2007 - May 2011</small></p>
                            </div>
                            <div class="timeline-body">
                                <p><strong>Chief Technology Officer</strong></p>
                                <ul>
                                    <li> Responsible for 70 staff spread across Design, Development, QA, Customer Support and IT functions.</li>
                                    <li> Modernised development tools based on Microsoft Technology stack. </li>
                                    <li> Managed the architecting, development and subsequent implementation of <i>Medway</i>, the companies flagship 
                                    <a target="_blank" href="https://en.wikipedia.org/wiki/Hospital_information_system"> Hospital Information system. <i class="fa fa-external-link" aria-hidden="true"></i></a> 
                                    <li> Modernised and standardised developmement working practices across all group of companies to Agile using SCRUM.</li>
                                </ul>
                                <hr>
                                <div class="timeline-heading">
                                    <p><small class="text-muted"></i> May 2001 - August 2007</small></p>
                                </div>
                                <div class="timeline-body">
                                    <p><strong>Systems Development Manager</strong></p>
                                    <ul>
                                        <li>Responsible for day to day running of technical teams spanning Design, Development, QA, Customer Support and IT functions.</li>
                                    <ul>
                                </div>
                                <p> <em>The success of Medway led to the subsequent sale of System C to McKesson UK. </em>
                                </p>
                            </div>
                        </div>
                    </li>


                    <!-- Previous employment =================================== -->
                    <li>
                        <div class="timeline-badge info"><i class="fa fa-history" aria-hidden="true"></i></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="timeline-title">Previous Emplyment</h4>
                                <hr>
                            </div>
                            <div class="timeline-body">
                                <h4> ReMass Limited </h4>
                                <p><small class="text-muted"></i> Jun 1995 - May 2001</small></p>
                                <p>Technical manager, lead developer, sales, support, on-site training and software implementation.</p>
                                <hr>

                                <h4>
                                    <a target="_blank" href="http://ics.net/"> ICS Solutions <i class="fa fa-external-link" aria-hidden="true"></i></a>
                                </h4>
                                <p><small class="text-muted"></i> Aug 1992 - Jun 1995</small></p>
                                <p>Software developer, consultant, systems integration, software implementation, network engineer.</p>
                                <hr>

                                <h4>
                                <a target="_blank" href="https://www.pitneybowes.com/uk"> Pitney Bowes plc <i class="fa fa-external-link" aria-hidden="true"></i></a>
                                </h4>                                    
                                <p><small class="text-muted"></i> 1988 - 1992</small></p>
                                <p>Lead developer, Operations and Support manager.</p>
                                <hr>

                                <h4>Woods of Colchester (GEC) Limited</h4>
                                <p><small class="text-muted"></i> 1984 - 1988</small></p>
                                <p>Software developer, business analyst.</p>

                            </div>
                        </div>
                    </li>

                    <!-- University =================================== -->
                    <li class="timeline-inverted">
                        <div class="timeline-badge dark"><i class="fa fa-graduation-cap" aria-hidden="true"></i></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="timeline-title">Education</h4>
                                <p><small class="text-muted"></i> 1981-1984</small></p>
                            </div>
                            <div class="timeline-body">
                                <h4>
                                    <a target="_blank" href="http://www.coventry.ac.uk/cuc/course-structure/hnc-hnd-degree/2017-18/engineering/"> Coventry (Lanchester) University <i class="fa fa-external-link" aria-hidden="true"></i></a>
                                </h4>    
                                <p>BSc(Hons) degree in Combined Engineering Studies</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- End of Timeline1 -->


        </main>


        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->


        <script type="text/javascript" src="script.js"></script>
        <script src="https://use.fontawesome.com/cc84547530.js"></script>




        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery.min.js"><\/script>')</script>
        
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
        
        <link rel="icon" href="../../../../favicon.ico">

        <!--
        <script src="../../../../assets/js/vendor/popper.min.js"></script>
        <script src="../../../../dist/js/bootstrap.min.js"></script>
        -->

        <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
        <!--
        <script src="../../../../assets/js/vendor/holder.min.js"></script>
        -->
    </body>

    <?php require_once 'includes/footer.php'; ?>
</html>