<?php

include('Snoopy.class.php');

$LIKE4U_TOKEN = '';

class Instagram {

  public static function likes($count, $url) {
    echo 'Instagram.likes ' + count + ' ' + url + '\n';
    $snoopy = new Snoopy();
    global $LIKE4U_TOKEN;
    $href = 'https://like4u.ru/likes/instagram/likes.json';
    $post_array = [
      "token" => $LIKE4U_TOKEN,
      "ig_like_task[title]" => "Some Title",
      "ig_like_task[url]" => $url,
      "ig_like_task[members_count]" => $count,
      "ig_like_task[cost]" => "1",
      "ig_like_task[tag_list]" => "some_tag",
      "ig_like_task[task_limit_attributes][minute_1]" => "100",
      "ig_like_task[task_limit_attributes][minutes_5]" => "500",
      "ig_like_task[task_limit_attributes][hour_1]" => "5000",
      "ig_like_task[task_limit_attributes][hours_4]" => "20000",
      "ig_like_task[task_limit_attributes][day_1]" => "",
      "ig_like_task[min_followers]" => "",
      "ig_like_task[min_media]" => "",
      "ig_like_task[has_avatar]" => "0",
      "ig_like_task[sex]" => "0",
    ];
    $snoopy->submit($href, $post_array);
    return $snoopy->results;
  }

  public static function followers($count, $url) {
    echo 'Instagram.followers ' + $count + ' ' + $url + '\n';
    $snoopy = new Snoopy();
    global $LIKE4U_TOKEN;
    $href = 'https://like4u.ru/likes/instagram/follows.json';
    $post_array = [
      "token" => $LIKE4U_TOKEN,
      "ig_follow_task[title]" => "Some Title",
      "ig_follow_task[url]" => $url,
      "ig_follow_task[members_count]" => $count,
      "ig_follow_task[cost]" => "3",
      "ig_follow_task[tag_list]" => "some_tag",
      "ig_follow_task[task_limit_attributes][minute_1]" => "100",
      "ig_follow_task[task_limit_attributes][minutes_5]" => "500",
      "ig_follow_task[task_limit_attributes][hour_1]" => "5000",
      "ig_follow_task[task_limit_attributes][hours_4]" => "20000",
      "ig_follow_task[task_limit_attributes][day_1]" => "",
      "ig_follow_task[min_followers]" => "",
      "ig_follow_task[min_media]" => "",
      "ig_follow_task[has_avatar]" => "0",
      "ig_follow_task[sex]" => "0",
    ];
    $snoopy->submit($href, $post_array);
    return $snoopy->results;
  }

  public static function comments($count, $url) {
    echo 'Instagram.comments ' + $count + ' ' + $url + '\n';
    $snoopy = new Snoopy();
    global $LIKE4U_TOKEN;
    $href = 'https://like4u.ru/likes/instagram/comments.json';
    $post_array = [
      "token" => $LIKE4U_TOKEN,
      "ig_comment_task[title]" => "Some Title",
      "ig_comment_task[url]" => $url,
      "ig_comment_task[members_count]" => $count,
      "ig_comment_task[cost]" => "5",
      "ig_comment_task[tag_list]" => "some_tag",
      "ig_comment_task[comment_type]" => "delight",
      "ig_comment_task[task_limit_attributes][minute_1]" => "100",
      "ig_comment_task[task_limit_attributes][minutes_5]" => "500",
      "ig_comment_task[task_limit_attributes][hour_1]" => "5000",
      "ig_comment_task[task_limit_attributes][hours_4]" => "20000",
      "ig_comment_task[task_limit_attributes][day_1]" => "",
      "ig_comment_task[min_followers]" => "",
      "ig_comment_task[min_media]" => "",
      "ig_comment_task[has_avatar]" => "0",
      "ig_comment_task[sex]" => "0",
    ];
    $snoopy->submit($href, $post_array);
    return $snoopy->results;
  }

}

class VK {

  public static function likes($count, $url) {
    echo 'VK.likes ' + $count + ' ' + $url + '\n';
    $snoopy = new Snoopy();
    global $LIKE4U_TOKEN;
    $href = 'https://like4u.ru/tasks.json';
    $post_array = [
      "token" => $LIKE4U_TOKEN,
			"task[kind]" => "1",
			"task[title]" => "SOME TITLE",
			"task[url]" => $url,
			"task[members_count]" => $count,
			"task[cost]" => "1",
			"task[sex]" => "",
			"task[age_min]" => "",
			"task[age_max]" => "",
			"task[friends_count]" => "",
			"task[country]" => "1",
			"task[city]" => "1",
			"task[has_avatar]" => "",
			"task_limit[minute_1]" => "100",
			"task_limit[minutes_5]" => "500",
			"task_limit[hour_1]" => "5000",
			"task_limit[hours_4]" => "20000",
			"task_limit[day_1]" => "",
    ];
    $snoopy->rawheaders["Content-Type"] = 'application/json';
    $snoopy->submit($href, $post_array);
    return $snoopy->results;
  }

  public static function groups($count, $url) {
    echo 'VK.groups ' + $count + ' ' + $url + '\n';
    $snoopy = new Snoopy();
    global $LIKE4U_TOKEN;
    $href = 'https://like4u.ru/tasks.json';
    $post_array = [
      "token" => $LIKE4U_TOKEN,
			"task[kind]" => "2",
			"task[title]" => "SOME TITLE",
			"task[url]" => $url,
			"task[members_count]" => $count,
			"task[cost]" => "6",
			"task[sex]" => "",
			"task[age_min]" => "",
			"task[age_max]" => "",
			"task[friends_count]" => "",
			"task[country]" => "1",
			"task[city]" => "1",
			"task[has_avatar]" => "",
			"task_limit[minute_1]" => "100",
			"task_limit[minutes_5]" => "500",
			"task_limit[hour_1]" => "5000",
			"task_limit[hours_4]" => "20000",
			"task_limit[day_1]" => "",
    ];
    $snoopy->rawheaders["Content-Type"] = 'application/json';
    $snoopy->submit($href, $post_array);
    return $snoopy->results;
  }

  public static function reposts($count, $url) {
    echo 'VK.reposts ' + $count + ' ' + $url + '\n';
    $snoopy = new Snoopy();
    global $LIKE4U_TOKEN;
    $href = 'https://like4u.ru/tasks.json';
    $post_array = [
      "token" => $LIKE4U_TOKEN,
			"task[kind]" => "3",
			"task[title]" => "SOME TITLE",
			"task[url]" => $url,
			"task[members_count]" => $count,
			"task[cost]" => "5",
			"task[sex]" => "",
			"task[age_min]" => "",
			"task[age_max]" => "",
			"task[friends_count]" => "",
			"task[country]" => "1",
			"task[city]" => "1",
			"task[has_avatar]" => "",
			"task_limit[minute_1]" => "100",
			"task_limit[minutes_5]" => "500",
			"task_limit[hour_1]" => "5000",
			"task_limit[hours_4]" => "20000",
			"task_limit[day_1]" => "",
    ];
    $snoopy->rawheaders["Content-Type"] = 'application/json';
    $snoopy->submit($href, $post_array);
    return $snoopy->results;
  }

  public static function add_friends($count, $url) {
    echo 'VK.add_friends ' + $count + ' ' + $url + '\n';
    $snoopy = new Snoopy();
    global $LIKE4U_TOKEN;
    $href = 'https://like4u.ru/tasks.json';
    $post_array = [
      "token" => $LIKE4U_TOKEN,
			"task[kind]" => "4",
			"task[title]" => "SOME TITLE",
			"task[url]" => $url,
			"task[members_count]" => $count,
			"task[cost]" => "8",
			"task[sex]" => "",
			"task[age_min]" => "",
			"task[age_max]" => "",
			"task[friends_count]" => "",
			"task[country]" => "1",
			"task[city]" => "1",
			"task[has_avatar]" => "",
			"task_limit[minute_1]" => "100",
			"task_limit[minutes_5]" => "500",
			"task_limit[hour_1]" => "5000",
			"task_limit[hours_4]" => "20000",
			"task_limit[day_1]" => "",
    ];
    $snoopy->rawheaders["Content-Type"] = 'application/json';
    $snoopy->submit($href, $post_array);
    return $snoopy->results;
  }

}

# echo Instagram::likes(10, 'https://www.instagram.com/p/Bf-JugFgQU5/?hl=ru&taken-by=fomchenkov_v');
# echo Instagram::followers(10, 'https://www.instagram.com/fomchenkov_v/?hl=ru');
# echo Instagram::comments(1, 'https://www.instagram.com/p/Bf-JugFgQU5/?hl=ru&taken-by=fomchenkov_v');

# echo VK::likes(10, 'https://vk.com/fomchenkov_v?z=photo168034338_456239579');
# echo VK::groups(10, 'https://vk.com/kronver_bot');
# echo VK::reposts(10, 'https://vk.com/fomchenkov_v?z=photo168034338_456239579');
# echo VK::add_friends(10, 'https://vk.com/fomchenkov_v/');

?>
