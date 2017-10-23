<?php
    include 'include/header.php';
?>

<?php 
/*

<!-- Header -->
<!-- Commented Out.
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <img class="img-responsive" src="img/profile.png" alt="">
                    <div class="intro-text">
                        <span class="name">Start Bootstrap</span>
                        <hr class="star-light">
                        <span class="skills">Web Developer - Graphic Artist - User Experience Designer</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
-->


<!-- Portfolio Grid Section -->
<section id="portfolio">
    <div class="container">
        <div class="row">

            <div style="padding-top: 30px;"></div>

<!--            <div class="col-md-12 text-center">-->
<!--                <h2 class="my_work">My Work</h2>-->
<!--                <hr class="star-primary">-->
<!--            </div>-->
        </div>



        <!--- portfolio item above this added on 9/7 --->

        <div class="row">


<!--            <div class="col-sm-4 portfolio-item">-->
<!--                --><?// if($showSecureContent){ ?>
<!--                <a href="#portfolioModal7" class="portfolio-link" data-toggle="modal">-->
<!--                --><?// }else{ ?>
<!--                <a href="#loginModal" class="portfolio-link" data-toggle="modal" onclick="updateHiddenField('portfolioModal7')">-->
<!--                --><?// }?>
<!--                    <div class="caption">-->
<!--                        <div class="caption-content">-->
<!--                            <strong>Mobile Interaction Design</strong> <br>-->
<!--                            Ticket Sales Interaction Design-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <img src="img/disney-logo2.png" class="img-responsive" alt="">-->
<!--                </a>-->
<!--            </div>-->
<!---->
<!--            <div class="col-sm-4 portfolio-item">-->
<!--                <a href="#portfolioModal8" class="portfolio-link" data-toggle="modal">-->
<!--                    <div class="caption">-->
<!--                        <div class="caption-content">-->
<!--                            <strong>UX Design Internship</strong> <br>-->
<!--                            User Management <br> UI Re-design-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <img src="img/apptio-logo2.png" class="img-responsive" alt="">-->
<!--                </a>-->
<!--            </div>-->


            <div class="col-sm-4 portfolio-item">
                <a href="aws.php" class="portfolio-link">
                    <div class="caption">
                        <div class="caption-content">
                            <strong>UX Design Internship</strong> <br>
                            Website Design
                        </div>
                    </div>
                    <img src="img/AWS.png" class="img-responsive card" alt="">
                </a>
            </div>


            <div class="col-sm-4 portfolio-item">
                <a href="ticket-sales.php" class="portfolio-link" data-toggle="modal">
                    <div class="caption">
                        <div class="caption-content">
                            <strong>Disney Parks and Resorts Digital</strong> <br>
                            Mobile App Design
                        </div>
                    </div>
                    <img src="img/ticket-sales.png" class="img-responsive card" alt="">
                </a>
            </div>


            <div class="col-sm-4 portfolio-item">
                <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                    <div class="caption">
                        <div class="caption-content">
                            <strong>UX Design Internship</strong> <br>
                            Website Design
                        </div>
                    </div>
                    <img src="img/shop-disney-parks.png" class="img-responsive card" alt="">
                </a>
            </div>


            <div class="col-sm-4 portfolio-item">
                <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                    <div class="caption">
                        <div class="caption-content">
                            <strong>UX Design Internship</strong> <br>
                            Website Design
                        </div>
                    </div>
                    <img src="img/styleguide.png" class="img-responsive card" alt="" >
                </a>
            </div>

<!--            <div class="col-sm-4 portfolio-item">-->
<!--                <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">-->
<!--                    <div class="caption">-->
<!--                        <div class="caption-content">-->
<!--                            <strong>Wishes Come True</strong> <br>-->
<!--                            Student Budgeting App Design-->
<!--                            <!--<i class="fa fa-search-plus fa-3x"></i>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <img src="img/Wishes-come-true-logo.png" class="img-responsive" alt="">-->
<!--                </a>-->
<!--            </div>-->
<!--            <div class="col-sm-4 portfolio-item">-->
<!--                <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">-->
<!--                    <div class="caption">-->
<!--                        <div class="caption-content">-->
<!--                            <strong>MoodWave</strong> <br>-->
<!--                            Mood Tracking iOS App Design-->
<!--                            <!--<i class="fa fa-search-plus fa-3x"></i>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <img src="img/Moodwave-logo.png" class="img-responsive" alt="">-->
<!--                </a>-->
<!--            </div>-->
<!--            <div class="col-sm-4 portfolio-item">-->
<!--                <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">-->
<!--                    <div class="caption">-->
<!--                        <div class="caption-content">-->
<!--                            <strong>GreenBlocks</strong> <br>-->
<!--                            Info Architecture and App Design-->
<!--                            <!-- <i class="fa fa-search-plus fa-3x"></i>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <img src="img/GreenBlocks-logo.png" class="img-responsive" alt="">-->
<!--                </a>-->
<!--            </div>-->
<!--            <div class="col-sm-4 portfolio-item">-->
<!--                <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">-->
<!--                    <div class="caption">-->
<!--                        <div class="caption-content">-->
<!--                            <strong>Yogibear Minigolf Park Website</strong> <br>-->
<!--                            Responsive Website Design-->
<!--                            <!--<i class="fa fa-search-plus fa-3x"></i>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <img src="img/Yogibear-logo.png" class="img-responsive" alt="">-->
<!--                </a>-->
<!--            </div>-->
<!--            <div class="col-sm-4 portfolio-item">-->
<!--                <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">-->
<!--                    <div class="caption">-->
<!--                        <div class="caption-content">-->
<!--                            <strong>SeattleTourist</strong><br>-->
<!--                            App Design and Usability Testing-->
<!--                            <!--<i class="fa fa-search-plus fa-3x"></i>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <img src="img/seattle-tourist.png" class="img-responsive" alt="">-->
<!--                </a>-->
<!--            </div>-->
        </div>
    </div>
</section>




<!-- Portfolio Modals -->

<!--</div>
</div>
</div>-->

<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-content">
<div class="close-modal" data-dismiss="modal">
    <div class="lr">
        <div class="rl">
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="modal-body">
            <div class="col-md-8 col-md-offset-2">
                <h2>Wishes Come True</h2>
                <hr class="star-primary">
            </div>
            <div class="portfolio-body">

                <div class="col-md-5 col-md-offset-2">
                    <br>
                    <br>

                    <p style="color: #AD655F">A budgeting tool for college students to understand the value of a
                        budget, create a budget
                        and maintain a budget.</p>

                </div>
                <div class="col-md-3">
                    <img src="img/portfolio/wishescometrue/header_image.png" class="img-responsive" alt="">

                </div>
                <br><br><br>

                <div class="col-md-2 col-md-offset-2">
                    <h4>Timeline</h4>

                    <p>Sept 2014 to Dec 2014</p>
                </div>

                <div class="col-md-2">
                    <h4>Teammates</h4>

                    <p>Abhaya Pothina Gary Anderson Chen</p>
                </div>

                <div class="col-md-2">
                    <h4>Tools</h4>

                    <p>Interviews <br>
                        Surveys<br>
                        Contextual Inquiries<br>
                        Ideation<br>
                        Wireframing<br>
                        Axure<br>
                    </p>
                </div>

                <div class="col-md-2">
                    <h4>Description</h4>

                    <p>Wishes Come True is a student budgeting tool conceptualized for
                        the HCDE 518-User Centered Design class.</p>
                </div>

                <div class="col-md-8 col-md-offset-2">
                    <h3 style="font-weight: 600">UX Design Process</h3>
                    <br>
                    <img src="img/portfolio/wishescometrue/process.jpg" class="img-responsive">
                    <h4>Initial Problem Statement</h4>

                    <p> “How can we help college students create and stay within a budget?”</p>
                    <h4 style="color:#AD655F">Phase 1: User Research</h4>

                    <p>We used Competitive Analysis, Surveys, Interviews, and Contextual Inquiries as our
                        research techniques</p>
                </div>

                <div class="col-md-4 col-md-offset-2">
                    <img src="img/portfolio/wishescometrue/user_research.png" class="img-responsive">
                </div>
                <div class="col-md-4">
                    <p>Contextual inquiry was one of the methods employed to see and learn from participants
                        about
                        their current budgeting techniques</p>
                </div>


                <div class="col-md-8 col-md-offset-2">
                    <h4>Revised Problem Statement</h4>

                    <p>“How can we help college students understand the value of a budget, and support them as
                        they
                        create and maintain a budget.”</p>
                    <!--<h5>User Persona</h5>-->
                    <img src="img/portfolio/wishescometrue/persona.png" class="img-responsive">
                    <h4 style="color:#AD655F">Phase 2: Design</h4>

                    <p>We went through a week of extensive brainstorming and sketching, before we finalized on a
                        design idea.</p>


                    <img src="img/portfolio/wishescometrue/design_1.png" class="img-responsive">

                    <p style="font-style: italic "> Each team member brought 10 different ideas to solve for the
                        design problem statement.</p>
                    <br>
                    <img src="img/portfolio/wishescometrue/design_2.png" class="img-responsive">

                    <p style="font-style: italic"> We Critiqued each member’s idea and, selected top 3 concepts
                        which would solve our persona’s
                        budgeting problem.</p>
                    <br>

                    <img src="img/portfolio/wishescometrue/design_3.png" class="img-responsive">

                    <p style="font-style: italic ">The top 3 concepts, were brainstormed over and flushed out
                        into full fledged concepts.</p>
                    <br>

                    <img src="img/portfolio/wishescometrue/design_4.png" class="img-responsive">
                </div>


                <div class="col-md-8 col-md-offset-2">
                    <h4>Wishlist Design</h4>

                    <p>Using this app, the user can select an item he desires to posses and add it to his/her
                        wishlist.
                        A budget will be created for the user based on his bank account transactions and, the
                        cost
                        of the item on the wishlist.
                        The budget allocates a certain amount of money every month to the wishlist fund. This
                        way
                        the application keeps the user motivated to stay within budget in order to secure an
                        item of
                        his desire.</p>
                </div>
                <div class="col-md-4 col-md-offset-2">
                    <img src="img/portfolio/wishescometrue/design_5.png" class="img-responsive">
                </div>
                <div class="col-md-4">
                    <br>
                    <br>
                    <br>
                    <h4>New User Introduction</h4>

                    <p>The user is introduced to the step by step process he/she will follow in order to set up
                        their budget. Each step’s, purpose is briefly explained</p>
                </div>
                <div class="col-md-8 col-md-offset-2">
                </div>

                <div class="col-md-4 col-md-offset-2">
                    <br>
                    <br>
                    <br>
                    <h4>Receive Budget Summaries</h4>

                    <p>User can keep track of his wishlist progress each month, and use the red and green letter
                        cues to check performance in each budget category</p>

                </div>
                <div class="col-md-4">
                    <img src="img/portfolio/wishescometrue/design_6.png" class="img-responsive">

                </div>
                <div class="col-md-8 col-md-offset-2">
                </div>

                <div class="col-md-4 col-md-offset-2">
                    <img src="img/portfolio/wishescometrue/design_7.png" class="img-responsive">
                </div>
                <div class="col-md-4">
                    <br>
                    <br>
                    <br>
                    <h4>Dropdown Prompts</h4>

                    <p>Dropdown list of items for user to conveniently pick his item for wishlist</p>
                </div>

                <div class="col-md-8 col-md-offset-2">
                    <h4 style="color:#AD655F">Phase 3: Evaluating prototypes</h4>

                    <p>We used Axure RP to prototype the final designs.
                        Usability testing was conducted with 6 participants using phone and laptop.
                        As a result, a final prototype was created, and the changes identified through the
                        usability
                        tests were incorporated.
                    </p>
                    <h4>Challenges</h4>

                    <p>Teammate locations and scheduling: Since the 3 team members were all based in different
                        locations and day jobs made it difficult for us to meet frequently, it became necessary
                        for
                        us to make most of online collaboration tools and come prepared to the weekly
                        meetings</p>


                    <button type="button" class="btn btn-default" data-dismiss="modal"><i
                            class="fa fa-times"></i>
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>


</div>


</div>
</div>
<!--</div>
</div>
</div>
</div>
</div>-->
<div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="modal-body">

                    <div class="col-md-8 col-md-offset-2">
                        <h2>MoodWave: Mood Tracking App</h2>
                        <hr class="star-primary">
                    </div>
                    <div class="portfolio-body">
                        <div class="col-md-3 col-md-offset-2">

                            <h4>Objective</h4>

                            <div class="portfolio_list">To provide users with credible insight into their mood patterns
                                while requiring minimum
                                input from them.
                            </div>

                            <h4>
                                Timeline
                            </h4>

                            <div class="portfolio_list">Sept 2013 - Dec 2013</div>

                            <h4>
                                Teammates
                            </h4>

                            <div class="portfolio_list">Abhaya Pothina</div>
                            <div class="portfolio_list">Victor</div>
                            <div class="portfolio_list">Colin</div>
                            <div class="portfolio_list">Mike</div>


                            <h4>
                                Tools
                            </h4>

                            <div class="portfolio_list">Omnigraffle</div>
                            <div class="portfolio_list">Adobe Photoshop</div>

                        </div>


                        <div class="col-md-5">
                            <img src="img/portfolio/moodwave/Mood%20Review%20(1).png"
                                 style="max-width: 271px;  height: auto;">
                        </div>

                        <div class="col-md-8 col-md-offset-2">

                            <h3>Design Process</h3>

                            <h4>Competitive Analysis</h4>

                            <p>
                                Mood trackers such as “Optimism Online” and “Better Mood Tracker” help users struggling
                                with mood disorders. Mood tracking applications such as my mood tracker are effective in
                                tracking triggers and related factors, but require constant manual input.
                                The rise in the usage of wearable sensors made it mandatory for us to incorporate
                                external data heavily into the application.
                            </p>

                            <h4>User Research</h4>

                            <p>
                                Initial research involved identifying characteristics individuals interested in “casual
                                self-tracking”.
                            </p>

                            <h5>Types of User Research conducted:</h5>

                            <div class="portfolio_list"> Graduate Student Surveys</div>
                            <div class="portfolio_list">Focus Group Study</div>
                            <div class="portfolio_list">Semi-structured Interviews</div>

                            <p></p>
                            <h4>Solution</h4>

                            <p>
                                Our approach in Moodwave was to combine records from quick daily mood input (manual
                                input) with imported personal data from other devices and software services with APIs
                                (automatic input). The advantage is that users can easily combine multiple sources of
                                personal data with mood records in one app in order to gain insight into how
                                physiological, social, or environmental factors affect their mood.
                            </p>

                            <h5>User Personas</h5>
                            <img src="img/portfolio/moodwave/persona1.jpg" class="img-responsive">
                            <h5>Scenario Storyboard</h5>
                            <img src="img/portfolio/moodwave/storyboard.jpg" class="img-responsive">

                            <h4>
                                Design Challenges
                            </h4>

                            <p>How to build a simple and easy to use application with minimum inputs from the user,
                                while providing the user with accurate and informative results?
                            </p>

                            <h5>Brainstorming</h5>
                            <img src="img/portfolio/moodwave/brainstorming.jpg" class="img-responsive">

                            <p></p>
                            <h5>Iterations</h5>
                            <img src="img/portfolio/moodwave/moodwave-iteration.jpg" class="img-responsive">

                            <p></p>
                            <h5>Final Designs</h5>
                        </div>

                        <div class="col-md-4 col-md-offset-2">

                            <img src="img/portfolio/moodwave/final_design1.jpg" class="img-responsive">
                            <img src="img/portfolio/moodwave/final_design3.jpg" class="img-responsive">
                        </div>
                        <div class="col-md-4">
                            <img src="img/portfolio/moodwave/final_design2.jpg" class="img-responsive">
                            <img src="img/portfolio/moodwave/final_design4.jpg" class="img-responsive">
                        </div>


                        <div class="col-md-8 col-md-offset-2">

                            <h5>Design Overview and User Navigation</h5>

                            <img src="img/portfolio/moodwave/design_overview/Slide1.jpg" class="img-responsive">

                            <h4>Usability Testing</h4>

                            <p>We selected 6 test users from our target audience to complete a cognitive walkthrough.
                                Based on the results of the usability tests changes were made to the home screen and
                                other UI improvements were made.
                                Another major change we decided to incorporate based on the feedback received is to
                                provide the users with a onetime overlay tutorial of the functionality of the various
                                features of the app.</p>
                            <h4>My Role</h4>

                            <div class="portfolio_list"> Research- Creating and conducting surveys, interviews, and
                                focus groups
                            </div>
                            <div class="portfolio_list"> Brainstorming and ideation</div>
                            <div class="portfolio_list"> Design : Prototyping and Iterating Mood Review screens</div>
                            <div class="portfolio_list"> Conducting usability tests and supporting in creating of
                                usability test script
                            </div>

                            <p></p>

                            <button type="button" class="btn btn-default" data-dismiss="modal"><i
                                    class="fa fa-times"></i>
                                Close
                            </button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--</div>-->
<div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="modal-body">

                    <div class="col-md-8 col-md-offset-2">
                        <h2>GreenBlocks: E-Waste Solution</h2>
                        <hr class="star-primary">
                    </div>
                    <div class="portfolio-body greenblocks">

                        <div class="col-md-2 col-md-offset-2">
                            <h4>Problem</h4>

                            <p>Swift changes in technology,falling prices, and planned obscolence have resulted in a
                                fast
                                growing surplus of electronic waste around the globe.</p>
                        </div>

                        <div class="col-md-2">
                            <h4>Solution</h4>

                            <p>Greenblocks is an E-Waste solution app conceptualized by my team and I to help users sell
                                thier electronic devices for money and inturn become a recycle hero.</p>
                        </div>

                        <div class="col-md-2">
                            <h4>Objective</h4>

                            <p>The objective of this initiative is to provide users with an alternative to the regular
                                methods of electronic disposal.</p>
                        </div>

                        <div class="col-md-2">
                            <h4>Differentiator</h4>

                            <p>Current website solutions lack portability. A mobile application solves the problem of
                                portability while providing other conveniences such as accessibility, quick results, and
                                simplified process.</p>
                        </div>


                        <div class="col-md-8 col-md-offset-2">
                            <h5 class="before-image">User Flow</h5>
                            <img src="img/portfolio/greenblocks/userflow.jpg" class="img-responsive">

                            <h5 class="before-image">Information Architecture</h5>
                            <img src="img/portfolio/greenblocks/information%20architecture.jpg" class="img-responsive">

                            <h5 class="before-image">Low Fidelity Wireframes</h5>
                            <img src="img/portfolio/greenblocks/lowfidelity_wireframes.jpg" class="img-responsive">

                            <h5 class="before-image">Final Designs</h5>
                            <img src="img/portfolio/greenblocks/final_wireframes.jpg" class="img-responsive">

                            <h4>My role in the team project</h4>

                            <div class="portfolio_list">I conceptualized the working of the application along with a
                                team member.
                            </div>
                            <div class="portfolio_list">I defined the information hierarchy and designed the information
                                flow
                            </div>
                            <div class="portfolio_list">I designed the final wireframes using Adobe Photoshop and Adobe
                                Illustrator
                            </div>

                            <p></p>

                            <button type="button" class="btn btn-default" data-dismiss="modal"><i
                                    class="fa fa-times"></i>
                                Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="modal-body">
                    <div class="col-md-8 col-md-offset-2">
                        <h2>Yogibear minigolf Park</h2>
                        <hr class="star-primary">
                    </div>
                    <div class="portfolio-body yogibear">
                        <div class="col-md-2 col-md-offset-2">
                            <h4>User Goals</h4>

                            <p>To be able to look at what all the park has to offer and determine if it fits my budget,
                                preferences, and needs.</p>
                        </div>

                        <div class="col-md-3">
                            <h4>Business Goals</h4>

                            <p>To increase the revenue of the park by increasing the popularity and the accessibility of
                                details regarding the park among new customers.
                                Also, to introduce a new venture called TrendyParents.</p>
                        </div>

                        <div class="col-md-3">
                            <h4>Target Audience</h4>

                            <p>Based on the inputs from the client, the primary visitors of the children’s park were
                                identified to be young tech savvy parents and tourists with families.</p>
                        </div>
                        <p></p>

                        <div class="col-md-8 col-md-offset-2">

                            <h4>User Research Methods</h4>

                            <p>I used the following methods to generate user requirements and, business requirements
                            </p>
                            <ul>
                                <li>Online and Offline Surveys</li>
                                <li>Fly on the wall observation techniques</li>
                                <li>Semi structured interviews with visitors and stakeholders</li>
                                <li>Competitive Analysis</li>
                            </ul>

                            <h5>User Persona</h5>

                            <img src="img/portfolio/yogibear/yogibear_persona.jpg" class="img-responsive img-rounded">

                            <h4>Insights based on Research</h4>

                            <p>The visitors of the park website were either specifically looking to get some information
                                about holding an event at the park or were routed to the park website after a google
                                search pertaining to organizing events in Hyderabad.
                                The attractions page was specifically created for customers new to Yogibear minigolf
                                Park. Since Yogibear minigolf park constantly added new attractions to the park,
                                sometimes even returning customers were not aware of the new attractions.</p>
                            <h5 class="before-image">Final Designs</h5>
                            <img src="img/portfolio/yogibear/final%20design-1.jpg" class="img-responsive">
                            <h5 class="before-image">Organize Events</h5>
                            <img src="img/portfolio/yogibear/final_design_2.jpg" class="img-responsive">
                            <h5 class="before-image">Attractions at Yogibear</h5>
                            <img src="img/portfolio/yogibear/final_design_3.jpg" class="img-responsive">
                            <h5 class="before-image">Responsive Design</h5>
                            <img src="img/portfolio/yogibear/final_design_4.jpg" class="img-responsive">

                            <p></p>


                            <button type="button" class="btn btn-default" data-dismiss="modal"><i
                                    class="fa fa-times"></i>
                                Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="modal-body">
                    <div class="col-lg-8 col-lg-offset-2">
                        <h2>SeattleTourist</h2>
                        <hr class="star-primary">
                        </div>
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="portfolio-body seattletourist">
                            <p>SeattleTourist is an interactive application designed for tourists visiting Seattle for
                                the first time.</p>

                            <p>The application was designed as part of a project for the class of IMT 598- Web Strategy
                                and Design.</p>
                            <h4>Motivation</h4>

                            <p>
                                The experience of visiting a new city can be confusing for anyone. Also, if you are in a
                                city for a short period of 2 days, deciding on a to do list becomes even more difficult.
                                SeattleTourist is simple application which will act as a tour guide for the visitors on
                                a short visit to Seattle.</p>
                            <h4> User Requirements</h4>

                            <p>
                                “I want to explore around the space needle area before I go up to the observation desk”
                                “I have one more day in Seattle before I leave on the Alaskan Cruise, I want to explore
                                the city more but don’t want to tire myself before the long journey!”</p>
                            <h4>Inspiration</h4>

                            <p>I drew inspiration from an old couple holding a map and ticking of points on the map as
                                they went around visiting places in Seattle.
                                As traditional maps get replaced by maps on smartphones and as physical paper to-do
                                lists get replaced by “to-do list” apps on phones , I decided to incorporate traditional
                                sightseeing methods into an application with an interactive interface.</p>

                            <h4>Design Challenges</h4>

                            <p>How to keep the user engaged with the application while not intruding with his experience
                                of exploring Seattle?</p>

                            <h5 class="before-image">Brainstorming</h5>
                            <img src="img/portfolio/seattletourist/brainstorming_1.jpg" class="img-responsive">
                            <img src="img/portfolio/seattletourist/brainstorming_2.jpg" class="img-responsive">

                            <h5 class="before-image">Final Designs</h5>
                            <img src="img/portfolio/seattletourist/final%20design_1.jpg" class="img-responsive">

                            <h4>Usability Tests</h4>

                            <p>

                                I conducted usability tests twice in the process of designing the application. Results
                                from the usability tests led to some major changes in the landing page design and
                                navigational structure. I tested the final design using AXURE RP prototypes</p>

                            <p>Some of the design changes incorporated were</p>
                            <ul>
                                <li>Change in the method of selection of the user's goal. A simple selection wheel is
                                    provided with an image and label to eliminate any sort of ambiguity
                                </li>
                                <li>A bottom accessible navigation bar is provided for frequently used/returned to
                                    actions observed during the usability tests.
                                </li>
                                <li>Location, timings, phone numbers, and pricing to attractions were added to improve
                                    accessibility of information.
                                </li>
                            </ul>

                            <p></p>

                            <button type="button" class="btn btn-default" data-dismiss="modal"><i
                                    class="fa fa-times"></i>
                                Close
                            </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<?
if($showSecureContent){
?>
<!--- Disney Modal -->
<div class="portfolio-modal modal fade" id="portfolioModal7" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="modal-body">
                    <div class="col-md-8 col-md-offset-2">
                        <h2>Disney</h2>
                        <hr class="star-primary">
                    </div>
                    <div class="portfolio-body">

                        <div class="col-md-8 col-md-offset-2">
                            <br>
                            <br>

                            <p style="color: #AD655F">The details of this project will be updated soon.</p>

                            <button type="button" class="btn btn-default" data-dismiss="modal"><i
                                    class="fa fa-times"></i>
                                Close
                            </button>

                        </div>


                    </div>
                </div>
            </div>


        </div>


    </div>
</div>
<?
}
?>



    <!-- Apptio Modal -->
    <div class="portfolio-modal modal fade" id="portfolioModal8" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="modal-body">
                        <div class="col-md-8 col-md-offset-2">
                            <h2>Apptio</h2>
                            <hr class="star-primary">
                        </div>
                        <div class="portfolio-body">

                            <div class="col-md-8 col-md-offset-2">
                                <br>
                                <br>

                                <p style="color: #AD655F">The details of this project will be updated soon.</p>

                                <button type="button" class="btn btn-default" data-dismiss="modal"><i
                                        class="fa fa-times"></i>
                                    Close
                                </button>

                            </div>


                        </div>
                    </div>
                </div>


            </div>


        </div>
    </div>

*/

?>




<?php
    include 'include/footer.php';
?>
