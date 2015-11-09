<div id="topFivePostsDiv">
	<div class="content-title">
		<h2>Top five posts</h2>
	</div>
	<?php
	
		$postNum = 5;		// Number of posts to be display
		$html = "";
	
		// Read and decode json file
		$data = file_get_contents("data/data.json");
		$postArray = json_decode($data, true);

		// Create first five posts
		for ($postIdx = 0; $postIdx < $postNum; $postIdx ++){
			// Draw line between each post
			if ($postIdx != 0){		// First post doesn't draw line on top post
				$html .= '<hr>';
			}
		
			// Get each post topic
			$post = $postArray[$postIdx];
			
			// Div tag to contain thumbnail and post content
			$html .= '<div class="row">';
			
			// Display post content (title and description)
			$html .= '<div class="post col-xs-9 pull-left">';
		
			// Link URL of post title
			$html .= '<a href="' . $post["url"] . '"><u>' . $post["title"] . '</u></a>';
			$html .= '<p>';
		
			// Post description
			$html .= $post["description"];
		
			$html .= '</p>';	// End post description
			$html .= '</div>';	// End post content
			
			// Display thumbnil on the left side
			$html .= '<div class="col-xs-3 pull-right">';
			$html .= '<img src="' . $post["thumbnail"] . '" class="img-thumbnail " alt="' . $post["title"] . '" width="150px" height="150px">';
			$html .= '</div>';
			
			$html .= '</div>';	// End container which contains thumbnail and post content
		}
		
		echo $html;
	?>
</div>