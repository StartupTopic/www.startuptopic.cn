<?php
/**
 * Template Name: Source page
 * Description: Source pages
 *
 * @package Portfolio Press
 */

get_header(); ?>

	<div id="primary" class="source-content full-width">
		  <link rel="stylesheet" type="text/css" media="all" href="<?php echo esc_url( get_template_directory_uri() . '/templates/source/css/styles.css' ); ?>" />
		  <link rel="stylesheet" type="text/css" media="all" href="<?php echo esc_url( get_template_directory_uri() . '/templates/source/css/stack.css' ); ?>" />
		  <link rel="stylesheet" type="text/css" media="all" href="<?php echo esc_url( get_template_directory_uri() . '/templates/source/fancyBox/source/jquery.fancybox.css' ); ?>" />

		  <div id="nav">
		    <div class="container">
		      <div id="primary">
		        <ul id="primary_filter" class="option-set" data-filter-group="type">
		          <li><a href="#" data-filter="*" title="Amazing Source" class="selected">All</a></li>
		          <li><a href="#" data-filter=".video" title="Amazing Video">Video</a></li>
		          <li><a href="#" data-filter=".book" title="Amazing Books">Book</a></li>
		        </ul>
		      </div>
		      <form method="get" id="search_form">
		        <input type="search" name="s" placeholder="Find Source" id="search_field" />
		      </form>
		      </ul>
		    </div><!-- .container -->
		  </div><!-- #nav -->

		  <div id="content" >
		    <div class="container clearfix">
		      <div id="main" class="wide">
		        <div class="section clearfix">
		          <div class="article">
		            <div id="deck">
		              <div id="cards" class="row bottom">
		                <!-- card begin -->

		                <div class="card video">
		                  <div class="fronts">
		                    <a class="denny-recommend-video" href="https://www.youtube.com/watch?v=FkisTuC2ZCo&hd=1" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() . '/templates/source/images/11.jpg' ); ?>" width="225" height="140"></a>
		                    <h3 class="tool_name">The 7 most common mistakes startups make</h3>
		                    <p>A short and concise list of the most popular mistakes early-stage entrepreneurs make.</p>
		                 	<img class="player" src="<?php echo esc_url( get_template_directory_uri() . '/templates/source/images/player.png' ); ?>">
		                  </div>
		                </div>

		                <div class="card video">
		                  <div class="fronts">
		                    <a class="denny-recommend-video" href="https://www.youtube.com/watch?v=CuOATMXTFcQ&index=3&list=WL" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() . '/templates/source/images/peking-dream.jpg' ); ?>" width="225" height="140"></a>
		                    <h3 class="tool_name">Peking University 2014 Micro-Film “Journal to the Stars” HD</h3>
		                    <p>A video about dream. Note it’s a Chinese movie with English subtitles.</p>
		                 	<img class="player" src="<?php echo esc_url( get_template_directory_uri() . '/templates/source/images/player.png' ); ?>">
		                  </div>
		                </div>

				<div class="card video">
		                  <div class="fronts">
		                    <a class="denny-recommend-video" href="https://www.youtube.com/watch?v=uN_6mQMYsGM" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() . '/templates/source/images/AMERICAN_DREAMS.jpg' ); ?>" width="225" height="140"></a>
		                    <h3 class="tool_name">American Dreams in China</h3>
		                    <p>This school help dream of Chinese teenagers come true. Before stand proudly in American stock market, many story happened with them.</p>
		                 	<img class="player" src="<?php echo esc_url( get_template_directory_uri() . '/templates/source/images/player.png' ); ?>">
		                  </div>
		                </div>

				<div class="card video">
		                  <div class="fronts">
		                    <a class="denny-recommend-video" href="https://www.youtube.com/watch?v=SYg7RRYKWGw" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() . '/templates/source/images/happy_ness.jpg' ); ?>" width="225" height="140"></a>
		                    <h3 class="tool_name">The Pursuit of Happyness</h3>
		                    <p>A struggling salesman takes custody of his son as he's poised to begin a life-changing professional endeavor.</p>
		                  	<img class="player" src="<?php echo esc_url( get_template_directory_uri() . '/templates/source/images/player.png' ); ?>">
		                  </div>
		                </div>

				<div class="card video">
		                  <div class="fronts">
		                    <a class="denny-recommend-video" href="https://www.youtube.com/watch?v=mehUC5l-lGM" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() . '/templates/source/images/social_network.jpg' ); ?>" width="225" height="140"></a>
		                    <h3 class="tool_name">The Social Network</h3>
		                    <p>Harvard student Mark Zuckerberg creates the social networking site that would become known as Facebook, but is later sued by two brothers who claimed he stole their idea.</p>
		                  	<img class="player" src="<?php echo esc_url( get_template_directory_uri() . '/templates/source/images/player.png' ); ?>">
		                  </div>
		                </div>

				<div class="card video">
		                  <div class="fronts">
		                    <a class="denny-recommend-video" href="https://www.youtube.com/watch?v=47ehNQIfHGs" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() . '/templates/source/images/Silicon_Valley.jpg' ); ?>" width="225" height="140"></a>
		                    <h3 class="tool_name">Pirates of Silicon Valley</h3>
		                    <p>History of Apple and Microsoft.</p>
		                 	<img class="player" src="<?php echo esc_url( get_template_directory_uri() . '/templates/source/images/player.png' ); ?>">
		                  </div>
		                </div>

				<div class="card video">
		                  <div class="fronts">
		                    <a class="denny-recommend-video" href="https://www.youtube.com/watch?v=k_df7n4DO6w" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() . '/templates/source/images/Barbarians_Gate.jpg' ); ?>" width="225" height="140"></a>
		                    <h3 class="tool_name">Barbarians at the Gate</h3>
		                    <p>The president of a major tobacco company decides to buy the company himself, but a bidding war ensues as other companies make their own offers.</p>
		                 	<img class="player" src="<?php echo esc_url( get_template_directory_uri() . '/templates/source/images/player.png' ); ?>">
		                  </div>
		                </div>

				<div class="card video">
		                  <div class="fronts">
		                    <a class="denny-recommend-video" href="https://www.youtube.com/watch?v=H68eCEWKb7M" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() . '/templates/source/images/Glengarry_Glen.jpg' ); ?>" width="225" height="140"></a>
		                    <h3 class="tool_name">Glengarry Glen Ross</h3>
		                    <p>An examination of the machinations behind the scenes at a real estate office.</p>
		                  	<img class="player" src="<?php echo esc_url( get_template_directory_uri() . '/templates/source/images/player.png' ); ?>">
		                  </div>
		                </div>

		                <div class="card video">
		                  <div class="fronts">
		                    <a class="denny-recommend-video" href="https://www.youtube.com/watch?v=ji5_MqicxSo" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() . '/templates/source/images/landy.jpg' ); ?>" width="225" height="140"></a>
		                    <h3 class="tool_name">Achieving Your Childhood Dreams</h3>
		                    <p>Randy had a knack for performance — both in front of the classroom and in front of the millions who watched his "Last Lecture."</p>
		                	<img class="player" src="<?php echo esc_url( get_template_directory_uri() . '/templates/source/images/player.png' ); ?>">
		                  </div>
		                </div>

                        <div class="card video">
		                  <div class="fronts">
		                    <a class="denny-recommend-video" href="https://www.youtube.com/watch?v=CALKYjygf3s" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() . '/templates/source/images/Seabiscuit.png' ); ?>" width="225" height="140"></a>
		                    <h3 class="tool_name">Seabiscuit -- You can't take me (Bryan Adams)</h3>
		                    <p>Seabiscuit, an unlikely champion and a symbol of hope to many Americans during the Great Depression.</p>
		                  	
		                  </div>
		                </div>
						


				<div class="card book">
		                  <div class="fronts">
		                    <a href="http://www.barnesandnoble.com/w/lean-startup-eric-ries/1100642052?ean=9780307887894" target="_blank"><img class="card-img" src="<?php echo esc_url( get_template_directory_uri() . '/templates/source/images/the-lean-startup-by-eric-ries.png' ); ?>" width="225" height="140"></a>
		                    <h3 class="tool_name">The Lean Startup</h3>
		                    <p>Most startups fail. But many of those failures are preventable.  The Lean Startup is a new approach being adopted across the globe, changing the way companies are built and new products are launched.</p>
		                  	<img class="player" src="<?php echo esc_url( get_template_directory_uri() . '/templates/source/images/book.png' ); ?>">
		                  </div>
		                </div>

				<div class="card book">
		                  <div class="fronts">
		                    <a href="http://www.barnesandnoble.com/w/the-art-of-the-pitch-peter-coughter/1111945219?ean=9780230120518" target="_blank"><img class="card-img" src="<?php echo esc_url( get_template_directory_uri() . '/templates/source/images/the-art-of-the-pitch-by-peter-coughter.png' ); ?>" width="225" height="140"></a>
		                    <h3 class="tool_name">The Art of the Pitch</h3>
		                    <p>Most executives spend the vast majority of their time creating their work, and almost no time on the presentation. Through an engaging and humorous narrative.</p>
		                  	<img class="player" src="<?php echo esc_url( get_template_directory_uri() . '/templates/source/images/book.png' ); ?>">
		                  </div>
		                </div>

				<div class="card book">
		                  <div class="fronts">
		                    <a href="http://www.barnesandnoble.com/w/the-founders-dilemmas-noam-wasserman/1110781957?ean=9781400841936" target="_blank"><img class="card-img" src="<?php echo esc_url( get_template_directory_uri() . '/templates/source/images/the-founders-dilemmas.png' ); ?>" width="225" height="140"></a>
		                    <h3 class="tool_name">The Founder's Dilemmas: Anticipating and Avoiding the Pitfalls That Can Sink a Startup</h3>
		                    <p>The Founder's Dilemmas is the first book to examine the early decisions by entrepreneurs that can make or break a startup and its team.</p>
		                  	<img class="player" src="<?php echo esc_url( get_template_directory_uri() . '/templates/source/images/book.png' ); ?>">
		                  </div>
		                </div>

				<div class="card book">
		                  <div class="fronts">
		                    <a href="http://www.barnesandnoble.com/w/startup-game-william-h-draper-iii/1101936857?ean=9780230339941" target="_blank"><img class="card-img" src="<?php echo esc_url( get_template_directory_uri() . '/templates/source/images/the-startup-game-by-william-h-draper.png' ); ?>" width="225" height="140"></a>
		                    <h3 class="tool_name">The Startup Game</h3>
		                    <p> In these pages Draper explores: how to evaluate innovative ideas and the entrepreneurs behind those ideas (lessons from Yahoo, Baidu, Tesla Motors, Activision, Measurex, and more); </p>
		                  	<img class="player" src="<?php echo esc_url( get_template_directory_uri() . '/templates/source/images/book.png' ); ?>">
		                  </div>
		                </div>

				<div class="card book">
		                  <div class="fronts">
		                    <a href="http://www.barnesandnoble.com/w/to-sell-is-human-daniel-h-pink/1111307434?ean=9781594631900" target="_blank"><img class="card-img" src="<?php echo esc_url( get_template_directory_uri() . '/templates/source/images/to-sell-is-human.png' ); ?>" width="225" height="140"></a>
		                    <h3 class="tool_name">To Sell Is Human: The Surprising Truth About Moving Others</h3>
		                    <p>According to the U.S. Bureau of Labor Statistics, one in nine Americans works in sales.</p>
		                  	<img class="player" src="<?php echo esc_url( get_template_directory_uri() . '/templates/source/images/book.png' ); ?>">
		                  </div>
		                </div>

				<div class="card book">
		                  <div class="fronts">
		                    <a href="http://www.barnesandnoble.com/w/made-to-stick-chip-heath/1102808718?ean=9781400064281" target="_blank"><img class="card-img" src="<?php echo esc_url( get_template_directory_uri() . '/templates/source/images/made-to-stick.png' ); ?>" width="225" height="140"></a>
		                    <h3 class="tool_name">Made to Stick: Why Some Ideas Survive and Others Die</h3>
		                    <p>Why do some ideas thrive while others die? And how do we improve the chances of worthy ideas? In Made to Stick, accomplished educators</p>
		                  	<img class="player" src="<?php echo esc_url( get_template_directory_uri() . '/templates/source/images/book.png' ); ?>">
		                  </div>
		                </div>

				<div class="card book">
		                  <div class="fronts">
		                    <a href="http://www.barnesandnoble.com/w/thinking-fast-and-slow-daniel-kahneman/1100169801?ean=9780374533557" target="_blank"><img class="card-img" src="<?php echo esc_url( get_template_directory_uri() . '/templates/source/images/thinking-fast-and-slow.png' ); ?>" width="225" height="140"></a>
		                    <h3 class="tool_name">Thinking, Fast and Slow</h3>
		                    <p> In this book, Kahneman describes the "machinery of the mind," the two mental systems, one fast and the other slow, that determine our choices and shape our impressions.</p>
		                  	<img class="player" src="<?php echo esc_url( get_template_directory_uri() . '/templates/source/images/book.png' ); ?>">
		                  </div>
		                </div>

				<div class="card book">
		                  <div class="fronts">
		                    <a href="http://www.barnesandnoble.com/w/hackers-and-painters-paul-graham/1102991045?ean=9780596550660" target="_blank"><img class="card-img" src="<?php echo esc_url( get_template_directory_uri() . '/templates/source/images/hacker.jpg' ); ?>" width="225" height="140"></a>
		                    <h3 class="tool_name">Hackers & Painters: Big Ideas from the Computer Age</h3>
		                    <p>We are living in the computer age, in a world increasingly designed and engineered by computer programmers and software designers.</p>
		                  	<img class="player" src="<?php echo esc_url( get_template_directory_uri() . '/templates/source/images/book.png' ); ?>">
		                  </div>
		                </div>

		                <!--card end  -->

		              </div>
		          </div><!-- .article -->
		        </div><!-- .section -->
		      </div><!-- #main -->
		    </div><!-- .container -->
		  </div><!-- #content -->
		  </div>

		  <script src="<?php echo esc_url( get_template_directory_uri() . '/templates/source/js/jquery.min.js' ); ?>"></script>
		  <script src="<?php echo esc_url( get_template_directory_uri() . '/templates/source/fancyBox/source/jquery.fancybox.pack.js' ); ?>"></script>
		  <script src="<?php echo esc_url( get_template_directory_uri() . '/templates/source/fancyBox/source/helpers/jquery.fancybox-media.js' ); ?>"></script>
		  <script src="<?php echo esc_url( get_template_directory_uri() . '/templates/source/js/jquery.isotope.min.js' ); ?>"></script>
		  <script src="<?php echo esc_url( get_template_directory_uri() . '/templates/source/js/jquery.quicksearch.js' ); ?>"></script>
		  <script src="<?php echo esc_url( get_template_directory_uri() . '/templates/source/js/jquery.qtip.js' ); ?>"></script>
		  <script src="<?php echo esc_url( get_template_directory_uri() . '/templates/source/js/jquery.textutils.js' ); ?>"></script>
		  <script src="<?php echo esc_url( get_template_directory_uri() . '/templates/source/js/base.js' ); ?>"></script>
		  <script src="<?php echo esc_url( get_template_directory_uri() . '/templates/source/js/tools.js' ); ?>"></script>	
<script type="text/javascript">
$(document).ready(function() {
	$('.denny-recommend-video').fancybox({
		openEffect  : 'none',
		closeEffect : 'none',
		padding : 0,
		helpers : {
			media : {},
			overlay : {
				closeClick : false
			}
		}
	});
});
</script>

	</div><!-- #primary -->
<?php get_footer(); ?>
