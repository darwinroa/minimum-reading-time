<?php
add_shortcode('reading_time', 'minimumReadingTime');
function minimumReadingTime()
{
  $articleContent = apply_filters('the_content', get_the_content('', '', get_the_ID()));
  $word_count = str_word_count(strip_tags($articleContent));
  $time = round($word_count / 238);
  if ($time <= 1) {
    $time = 1 . ' minute';
  } else {
    $time = $time . ' minutes';
  };
  return $time;
}
