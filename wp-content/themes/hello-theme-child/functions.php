<?php
/**
 * Theme functions and definitions.
 *
 * For additional information on potential customization options,
 * read the developers' documentation:
 *
 * https://developers.elementor.com/docs/hello-elementor-theme/
 *
 * @package HelloElementorChild
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

define( 'HELLO_ELEMENTOR_CHILD_VERSION', '2.0.0' );

/**
 * Load child theme scripts & styles.
 *
 * @return void
 */
function hello_elementor_child_scripts_styles() {

	wp_enqueue_style( 'bootstrap-min-style', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/css/bootstrap.min.css', ['hello-elementor-theme-style', 'hello-elementor-child-style'], HELLO_ELEMENTOR_CHILD_VERSION );
	wp_enqueue_style( 'titillium-web-fonts', 'https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap', ['hello-elementor-theme-style', 'hello-elementor-child-style'], HELLO_ELEMENTOR_CHILD_VERSION );
	wp_enqueue_style( 'hello-elementor-child-style', get_stylesheet_directory_uri() . '/style.css', ['hello-elementor-theme-style'], HELLO_ELEMENTOR_CHILD_VERSION );
	wp_enqueue_style( 'hello-elementor-child-style-max-width-991', get_stylesheet_directory_uri() . '/assets/css/max-width-991.css', ['hello-elementor-theme-style', 'hello-elementor-child-style'], HELLO_ELEMENTOR_CHILD_VERSION, '(max-width: 991px)' );
	wp_enqueue_style( 'hello-elementor-child-style-max-width-767', get_stylesheet_directory_uri() . '/assets/css/max-width-767.css', ['hello-elementor-theme-style', 'hello-elementor-child-style'], HELLO_ELEMENTOR_CHILD_VERSION, '(max-width: 767px)' );

	wp_enqueue_script( 'hello-elementor-main-script', get_stylesheet_directory_uri() . '/assets/js/main.js', ['jquery-core'], HELLO_ELEMENTOR_CHILD_VERSION, true );

}
add_action( 'wp_enqueue_scripts', 'hello_elementor_child_scripts_styles', 20 );




function mmhs_contact_form_7() {
	$output = '	
			<span class="h2 font-weight-bold d-block mb-3 text-align-center get-in-touch">Get In Touch</span>
			<p class="font-weight-bold">We are very happy to receive your message</p>
			<p>
				<i class="fa fa-map-marker"></i>
				<span class="font-weight-bold">Adress:</span> Adonis Archisa, Garia Station Road, Kolkata - 700084, West Bengal, India
			</p>
			<p>
				<i class="fa fa-phone"></i>
				<span class="font-weight-bold">Phone/Whatsapp:</span> +88 01819 22 88 70
			</p>
		';
	return $output;
}
add_shortcode( 'mmhs_contact_address', 'mmhs_contact_form_7' );




function engaging_l_and_d_eco_system() {

	$learning_platform_lms_page = get_permalink( 193 );
	$e_learning_content_development_page = get_permalink( 196 );
	$video_learning_page = get_permalink( 199 );


	$output = '

	<div class="row">
		<div class="col-md-6 mb-4">
			<div class="bg"></div>
			<a class="home_learning_platform_btn text-decoration-none" href="'. $learning_platform_lms_page .'">
				<div class="border-shape">
					<div class="border-line">
						<div class="row">
							<div class="col-md-8 col-9">
								<h2 class="mycoachlms">
									<span class="mycoachlmss">Learning Platform LMS</span>
								</h2>
								<p class="mycoachlmsp">A cost effective, end-to-end solution for all your organization\'s L&D needs and resources.</p>
								<i class="fas fa-long-arrow-alt-right"></i>
							</div>
							<div class="col-md-4 col-3">
								<div class="border-rightside">
									<i class="fas fa-graduation-cap"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
			</a>
		</div>
		<div class="col-md-6 mb-4">
			<div class="bg2"></div>
			<a class="home_elearning_lab_btn text-decoration-none" href="'. $e_learning_content_development_page .'">
				<div class="border-shape">
					<div class="border-line1">
						<div class="row">
							<div class="col-md-8 col-9">
								<h2 id="eLearninglab" class="mycoachlms">
									<span class="eLearninglab">e-Learning Content Development</span>
									</h2>
								<p class="mycoachlmsp">Delivering engaging content tailored for corporate learning needs.</p>
								<i class="fas fa-long-arrow-alt-right"></i>
							</div>
							<div class="col-md-4 col-3">
								<div class="border-rightside">
									<i class="fas fa-pen-nib"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
			</a>
		</div>
		<div class="col-md-6 mb-4">
			<div class="bg3"></div>
			<a class="home_video_learning_btn text-decoration-none" href="'. $video_learning_page .'">
				<div class="border-shape">
					<div class="border-line2">
						<div class="row">
							<div class="col-md-8 col-9">
								<h2 class="mycoachlms">
									<span class="Videoelearn">Video Learning</span>
								</h2>
								<p class="mycoachlmsp">Effective Storytelling through video based content</p>
								<i class="fas fa-long-arrow-alt-right"></i>
							</div>
							<div class="col-md-4 col-3">
								<div class="border-rightside">
									<i class="fas fa-play-circle"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
			</a>
		</div>
	</div>

		';
	return $output;
}
add_shortcode( 'engaging_l_and_d_eco_system', 'engaging_l_and_d_eco_system' );





function learning_platform_lms_main_part() {
	
	$authoring_tool =  get_stylesheet_directory_uri() . '/assets/image/learning-platform-lms/authoring_tool.webp';
	$easy_learning_management =  get_stylesheet_directory_uri() . '/assets/image/learning-platform-lms/easy_learning_management.webp';
	$elearning_blended_learning =  get_stylesheet_directory_uri() . '/assets/image/learning-platform-lms/elearning_blended_learning.webp';
	$engagement_tools =  get_stylesheet_directory_uri() . '/assets/image/learning-platform-lms/engagement_tools.webp';
	$learning_analytics =  get_stylesheet_directory_uri() . '/assets/image/learning-platform-lms/learning_analytics.webp';
	$mobile_enabled =  get_stylesheet_directory_uri() . '/assets/image/learning-platform-lms/mobile_enabled.webp';
	$scalable =  get_stylesheet_directory_uri() . '/assets/image/learning-platform-lms/scalable.webp';
	$support =  get_stylesheet_directory_uri() . '/assets/image/learning-platform-lms/support.webp';
	$tailor_made_ui =  get_stylesheet_directory_uri() . '/assets/image/learning-platform-lms/tailor_made_ui.webp';
	
	$output = '

	<div id="learning_platform_lms_main_part" class="row">
		<div class="col-md-6 col-sm-6 mt-5">
			<div class="short-bg"></div>
			<div class="inside-box">
				<div class="row">
					<div class="col-md-12">
						<img class="img-responsive" src="' . $tailor_made_ui . '" alt="Customizable UI">
						<h4>Customizable UI</h4>
						<p>The learning platform can be customized to suit your organization\'s concepts that the learners can feel a familiarity with</p>
						<ul class="list-g">
							<li>Multi-device compatibility</li>
							<li>Multi-lingual support</li>
							<li>Responsive UX</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6 col-sm-6 mt-5">
			<div class="short-bg"></div>
			<div class="inside-box">
				<div class="row">
					<div class="col-md-12">
						<img class="img-responsive" src="' . $easy_learning_management . '" alt="Seamless Learning management">
						<h4>Seamless Learning management</h4>
						<p>Seamless course and activity management that enables the L&amp;D experts to</p>
						<ul class="list-g">
							<li>Handle certifications</li>
							<li>Add new courses in multiple formats</li>
							<li>Customize the learning path</li>
							<li>Manage the needed certifications</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div class="col-md-6 col-sm-6 mt-5">
			<div class="short-bg"></div>
			<div class="inside-box">
				<div class="row">
					<div class="col-md-12">
						<img class="img-responsive" src="' . $engagement_tools . '" alt="Learning Engagement tools">
						<h4>Learning Engagement tools</h4>
						<p>Ensure the learning information retains by the use of interactive methodologies like</p>
						<ul class="list-g">
							<li>Gamification</li>
							<li>Chat-based system</li>
							<li>Ratings throughout the course</li>
							<li>Discussion forums and panels</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6 col-sm-6 mt-5">
			<div class="short-bg"></div>
			<div class="inside-box">
				<div class="row">
					<div class="col-md-12">
						<img class="img-responsive" src="' . $mobile_enabled . '" alt="Mobile-friendly">
						<h4>Mobile-friendly</h4>
						<p>Allow learners to access the content anytime, anywhere through the dedicated app with well-rounded features such as,</p>
						<ul class="list-g">
							<li>Collaborative learning</li>
							<li>Offline learning</li>
							<li>Tracking management</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div class="col-md-6 col-sm-6 mt-5">
			<div class="short-bg"></div>
			<div class="inside-box">
				<div class="row">
					<div class="col-md-12">
						<img class="img-responsive" src="' . $scalable . '" alt="Integration and Scalability">
						<h4>Integration and Scalability</h4>
						<p>Novac Learning is compatible with various enterprise tools that can support you in scaling up the L&D functions to a wider user base</p>
						<ul class="list-g">
							<li>Easy migration</li>
							<li>Integration with Enterprise support and external tools</li>
							<li>Single sign in</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6 col-sm-6 mt-5">
			<div class="short-bg"></div>
			<div class="inside-box">
				<div class="row">
					<div class="col-md-12">
						<img class="img-responsive" src="' . $learning_analytics . '" alt="Learning Analytics">
						<h4>Learning Analytics</h4>
						<p>Get insights about individual learner\'s performance through the inbuilt analytics</p>
						<ul class="list-g">
							<li>Tracking options</li>
							<li>Detailed reports</li>
							<li>Course reports</li>
							<li>Extensive Leaderboards</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div class="col-md-6 col-sm-6 mt-5">
			<div class="short-bg"></div>
			<div class="inside-box">
				<div class="row">
					<div class="col-md-12">
						<img class="img-responsive" src="' . $support . '" alt="Support">
						<h4>Support</h4>
						<p>A dedicated support team to assist the L&D team to oversee and resolve any technical issues.</p>
						<ul class="list-g">
							<li>Faster and on-point support from the said team</li>
							<li>Implementing learning strategies to resolve any queries</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6 col-sm-6 mt-5">
			<div class="short-bg"></div>
			<div class="inside-box">
				<div class="row">
					<div class="col-md-12">
						<img class="img-responsive" src="' . $elearning_blended_learning . '" alt="Blended Learning">
						<h4>Blended Learning</h4>
						<p>Bring instructor-led training and eLearning onto a single program for a seamless administration of L&D</p>
						<ul class="list-g">
							<li>Virtual classroom with whiteboard</li>
							<li>Video Conferencing</li>
							<li>Training Approval</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	';
	return $output;
}
add_shortcode( 'learning_platform_lms_main_part', 'learning_platform_lms_main_part' );





function e_learning_content_development() {
	
	$application_simulation =  get_stylesheet_directory_uri() . '/assets/image/e_learning_content_development/application_simulation.webp';
	$blended_learning =  get_stylesheet_directory_uri() . '/assets/image/e_learning_content_development/blended_learning.webp';
	$cutomized_e_learning =  get_stylesheet_directory_uri() . '/assets/image/e_learning_content_development/cutomized_e_learning.webp';
	$digital_creatives =  get_stylesheet_directory_uri() . '/assets/image/e_learning_content_development/digital_creatives.webp';
	$gamified_learning =  get_stylesheet_directory_uri() . '/assets/image/e_learning_content_development/gamified_learning.webp';
	$just_in_time_learning =  get_stylesheet_directory_uri() . '/assets/image/e_learning_content_development/just_in_time_learning.webp';
	$microlearning =  get_stylesheet_directory_uri() . '/assets/image/e_learning_content_development/microlearning.webp';
	$scenario_based_earning =  get_stylesheet_directory_uri() . '/assets/image/e_learning_content_development/scenario_based_earning.webp';
	$technical_writing =  get_stylesheet_directory_uri() . '/assets/image/e_learning_content_development/technical_writing.webp';
	
	$output = '

	<div id="e_learning_content_development_main_part" class="row">
		<div class="col-md-6 col-sm-6 mt-5">
			<div class="short-bg"></div>
			<div class="inside-box">
				<div class="row">
					<div class="col-md-12">
						<img class="img-responsive" src="' . $cutomized_e_learning . '" alt="Customised eLearning">
						<h4>Customised eLearning</h4>
						<p>A common eLearning system wouldn\'t fit all the needs of an organization. Every individual is unique and offering a vast range of personalized content will ascertain the learning capabilities of the individual\'s needs.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6 col-sm-6 mt-5">
			<div class="short-bg"></div>
			<div class="inside-box">
				<div class="row">
					<div class="col-md-12">
						<img class="img-responsive" src="' . $gamified_learning . '" alt="Gamified Learning">
						<h4>Gamified Learning</h4>
						<p>Learning can be fun if done right. Games are great motivators and they can drive to retain information, incorporate ideas, earn badges and climb up on the leaderboards to enhance the learning experience.</p>
					</div>
				</div>
			</div>
		</div>

		<div class="col-md-6 col-sm-6 mt-5">
			<div class="short-bg"></div>
			<div class="inside-box">
				<div class="row">
					<div class="col-md-12">
						<img class="img-responsive" src="' . $microlearning . '" alt="Microlearning">
						<h4>Microlearning</h4>
						<p>Microlearning is a type of learning that incorporates rich graphics and animations to create small and powerful concepts for learners to get to know about the said concepts instantly.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6 col-sm-6 mt-5">
			<div class="short-bg"></div>
			<div class="inside-box">
				<div class="row">
					<div class="col-md-12">
						<img class="img-responsive" src="' . $scenario_based_earning . '" alt="Scenario-based Learning">
						<h4>Scenario-based Learning</h4>
						<p>Scenario-based learning allows learners to actively participate in well-crafted scenarios supported by problem-based or case-based strategies.</p>
					</div>
				</div>
			</div>
		</div>

		<div class="col-md-6 col-sm-6 mt-5">
			<div class="short-bg"></div>
			<div class="inside-box">
				<div class="row">
					<div class="col-md-12">
						<img class="img-responsive" src="' . $application_simulation . '" alt="Application Simulation">
						<h4>Application Simulation</h4>
						<p>Onboarding a team can be a daunting process and by integrating application simulation, your employees/learners can get to know comprehensive first hand about enterprise application, software or a business tool.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6 col-sm-6 mt-5">
			<div class="short-bg"></div>
			<div class="inside-box">
				<div class="row">
					<div class="col-md-12">
						<img class="img-responsive" src="' . $blended_learning . '" alt="Blended Learning">
						<h4>Blended Learning</h4>
						<p>A holistic learning environment with the right mix of instructor and digital learning tools such as virtual classrooms, video conferencing and eLearning.</p>
					</div>
				</div>
			</div>
		</div>

		<div class="col-md-6 col-sm-6 mt-5">
			<div class="short-bg"></div>
			<div class="inside-box">
				<div class="row">
					<div class="col-md-12">
						<img class="img-responsive" src="' . $technical_writing . '" alt="Technical Writing">
						<h4>Technical Writing</h4>
						<p>Create extensive technical documents that will serve as a knowledge bank for learning, reference and troubleshooting for both software and hardware users.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6 col-sm-6 mt-5">
			<div class="short-bg"></div>
			<div class="inside-box">
				<div class="row">
					<div class="col-md-12">
						<img class="img-responsive" src="' . $just_in_time_learning . '" alt="Vernacular Languages (Both Audio and Text)">
						<h4>Vernacular Languages (Both Audio and Text)</h4>
						<p>JIT contains short, impactful lessons with relevant support tools for the learners to partake in the lessons, anytime, anywhere regardless of the content topic.</p>
					</div>
				</div>
			</div>
		</div>

		
	</div>
	
	';
	return $output;
}
add_shortcode( 'e_learning_content_development', 'e_learning_content_development' );





function video_learning() {
	
	$two_d_videos =  get_stylesheet_directory_uri() . '/assets/image/video_learning/2d_videos.webp';
	$three_d_videos =  get_stylesheet_directory_uri() . '/assets/image/video_learning/3d_videos.webp';
	$interactive_videos =  get_stylesheet_directory_uri() . '/assets/image/video_learning/interactive_videos.webp';
	$live_video =  get_stylesheet_directory_uri() . '/assets/image/video_learning/live_video.webp';
	
	$output = '

	<div id="video_learning_main_part" class="row">
		<div class="col-md-6 col-sm-6 mt-5">
			<div class="short-bg"></div>
			<div class="inside-box">
				<div class="row">
					<div class="col-md-12">
						<img class="img-responsive" src="' . $two_d_videos . '" alt="2D animated videos">
						<h4>2D animated videos</h4>
						<p>Learners are being engaged in captivating 2D videos with relevant concepts to help them to understand any concepts from top to bottom.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6 col-sm-6 mt-5">
			<div class="short-bg"></div>
			<div class="inside-box">
				<div class="row">
					<div class="col-md-12">
						<img class="img-responsive" src="' . $three_d_videos . '" alt="3D animated videos">
						<h4>3D animated videos</h4>
						<p>3D videos could accord technical concepts, walkthroughs, and other product demos with the well-rounded concepts in the videos.</p>
					</div>
				</div>
			</div>
		</div>

		<div class="col-md-6 col-sm-6 mt-5">
			<div class="short-bg"></div>
			<div class="inside-box">
				<div class="row">
					<div class="col-md-12">
						<img class="img-responsive" src="' . $interactive_videos . '" alt="Interactive videos">
						<h4>Interactive videos</h4>
						<p>Invoke the attention of learners by integrating dynamic and interactive elements in the environment needed to enhance their attention.</p>
					</div>
				</div>
			</div>
		</div>	
	</div>
	
	';
	return $output;
}
add_shortcode( 'video_learning', 'video_learning' );














