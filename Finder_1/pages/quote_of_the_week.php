<div id="quoteOfTheWeekDiv">
	<div class="of-week-title">
		<h3>Quote of the week</h3>
	</div>
	<div class="of-week-content">
		<blockquote>
			<?php
			// Display quote of the week
			$quote = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ligula orci, rutrum eget ex ac, condimentum ultrices.";
			$quote_name = "Johnny Five";

			echo $quote;
			echo '<br />';
			echo '<h6><i>- ' . $quote_name . '</i></h6>';
			?>
		</blockquote>
	</div>
	<div class="of-week-button">
		<button type="button" class="btn btn-lg">
			More quotes
		</button>
	</div>
</div>