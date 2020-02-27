<?php
$a = 1;
if (isset($_GET['article']))
    $a = $_GET['article'];

$catalog = file_get_contents('./catalog/content.json');
$catalog = json_decode($catalog, 1);

preg_match('#\<strong\>(.*?)\<\/strong\>#', $catalog['texts'][$a], $matches);
if (!isset($matches[1])) $matches[1] = '';
?>
				<!-----------------Content-Box-------------------->
				<div id="main-content">
					<div class="wrap-content">
						<div class="row">
							<article class="single-post zerogrid">
								<div class="row wrap-post"><!--Start Box-->
									<div class="entry-header">
										<span class="time"><?=date('d-m-Y', time()-rand(13324, 1622211))?>  by admin</span>
										<h2 class="entry-title"><a href="#"><?=$matches[1]?></a></h2>
									</div>
									<div class="post-thumbnail-wrap">
										<img src="./img/<?=$catalog['images'][$a]?>">
									</div>
									<div class="entry-content">
										<?=$catalog['texts'][$a]?>
									</div>
								</div>
							</article>
							<div class="zerogrid">
								<div class="comments-are">
									<div id="comment">
										<h3>Comment, please</h3>
										<form name="comment_form" id="comment_form" method="post" action="">
											<label>
											<span>Text:</span>
											<textarea name="message" id="message"></textarea>
											</label>
											<label>
											<span>Name:</span>
											<input type="text"  name="name" id="name" required>
											</label>
											<label>
											<span>Email:</span>
											<input type="email"  name="email" id="email" required>
											</label>
											<center><input class="sendButton" type="submit" name="submitcomment" value="Send comment"></center>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
