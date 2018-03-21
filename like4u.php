<?php

include('Snoopy.class.php');

$LIKE4U_TOKEN = '';
$TMSMM_TOKEN = '';


class TmSMM
{
    private $uriAPI = 'https://tmsmm.ru/api/v1/';
    private $token;

    public function __construct($token)
    {
        if (empty($token)) {
            throw new \Exception('Empty token.');
        }

        $this->token = $token;
    }

    public function getTasksT1()
    {
        return $this->_api('GET', 'tasks/t1');
    }

    public function getTaskT1($id)
    {
        return $this->_api('GET', 'tasks/t1/' . $id);
    }

    public function createTaskT1($data)
    {
        return $this->_api('POST', 'tasks/t1', $data);
    }

    public function deleteTaskT1($id)
    {
        return $this->_api('DELETE', 'tasks/t1/' . $id);
    }

    public function getTasksT2()
    {
        return $this->_api('GET', 'tasks/t2');
    }

    public function getTaskT2($id)
    {
        return $this->_api('GET', 'tasks/t2/' . $id);
    }

    public function createTaskT2($data)
    {
        return $this->_api('POST', 'tasks/t2', $data);
    }

    public function deleteTaskT2($id)
    {
        return $this->_api('DELETE', 'tasks/t2/' . $id);
    }

    public function getTasksT4()
    {
        return $this->_api('GET', 'tasks/t4');
    }

    public function getTaskT4($id)
    {
        return $this->_api('GET', 'tasks/t4/' . $id);
    }

    public function createTaskT4($data)
    {
        return $this->_api('POST', 'tasks/t4', $data);
    }

    public function deleteTaskT4($id)
    {
        return $this->_api('DELETE', 'tasks/t4/' . $id);
    }

    public function getTasksT5()
    {
        return $this->_api('GET', 'tasks/t5');
    }

    public function getTaskT5($id)
    {
        return $this->_api('GET', 'tasks/t5/' . $id);
    }

    public function createTaskT5($data)
    {
        return $this->_api('POST', 'tasks/t5', $data);
    }

    public function deleteTaskT5($id)
    {
        return $this->_api('DELETE', 'tasks/t5/' . $id);
    }

    private function _api($customRequest, $url = '', $params = [])
    {
        $uri = $this->uriAPI . $url . '?token=' . $this->token;

        return $this->_checkResponse(
            $this->_curl($uri, $params, $customRequest)
        );
    }

    private function _checkResponse($response)
    {
        if (empty($response)) {
            throw new \Exception('Empty response.');
        }

        echo $response;

        $data = json_decode($response, true);

        if (json_last_error()) {
            throw new \Exception('Error json decode.');
        }

        return $data;
    }

    private function _curl($uri, $params = [], $customRequest = 'GET')
    {
        $curl = curl_init($uri);

        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_TIMEOUT, 30);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $customRequest);

        if (! empty($params)) {
            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($params));
        }

        $response = curl_exec($curl);

        curl_close($curl);

        return $response;
    }
}


class Instagram {

  public static function likes($count, $url) {
	echo 'Instagram.likes ' + $count + ' ' + $url + '\n';
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

class Telegram {

	public static function views($count, $url) {
		echo 'Telegram.views ' + $count + ' ' + $url + '\n';
		global $TMSMM_TOKEN;
		$oTmSMM = new TmSMM($TMSMM_TOKEN);
		return $oTmSMM->createTaskT2([
		    'name'       => 'Имя задачи', // Имя задачи, не обязательно
		    'channel'    => $url, //@tmsmm_ru или https://t.me/joinchat/AAAAAFAMH5WQ_g
		    'countView'  => $count, // Просмотров, минимально 100
		    'countDay'   => 2, // Автопросмотры, минимально 1
		    'speed'      => 2, // Скорость накрутки, 0 низкая, 1 - средняя, 2 - высокая
		    'recordType' => 0, // Выбор просмотра записей, 0 - первые 10-20 записей, 1 - указать номера записей
		    'recordIDs'  => '1,2,3', // Номера записей, через запятую.
		]);
		/*
		$snoopy = new Snoopy();
		global $TMSMM_TOKEN;
		$href = 'https://tmsmm.ru/api/v1/tasks/t2?token=' . $TMSMM_TOKEN;
		$post_array = [
		 	'name' => 'Имя задачи',
            'channel' => $url,  # @tmsmm_ru или https://t.me/joinchat/AAAAAFAMH5WQ_g
            'countView' => $count,  # Просмотров, минимально 100
            'countDay' => 2,
            'speed' => 2,
            'recordType' => 0,
            'recordIDs' => '1,2,3',  # Номера записей, через запятую.
		];
		$snoopy->rawheaders["Content-Type"] = 'application/json';
		$snoopy->submit($href, $post_array);
		return $snoopy->results;
		*/
	}

	public static function followers($count, $url) {
		echo 'Telegram.followers ' + $count + ' ' + $url + '\n';
		global $TMSMM_TOKEN;
		$oTmSMM = new TmSMM($TMSMM_TOKEN);
		return $oTmSMM->createTaskT1([
			'name'    => 'Имя задачи', // Имя задачи, не обязательно
			'channel' => $url, //@tmsmm_ru или https://t.me/joinchat/AAAAAFAMH5WQ_g
			'country' => 0, // Страна ботов, 0 - любая, 1 - Россия, 2 - Америка
			'sex'     => 0, // 0 - любой, 1 - женский, 2 - мужской
			'count'   => $count, // Количество, минимально 10
			'speed'   => 1 // Скорость накрутки, 0 низкая, 1 - средняя, 2 - высокая
		]);
		/*
		$snoopy = new Snoopy();
		global $TMSMM_TOKEN;
		$href = 'https://tmsmm.ru/api/v1/tasks/t1?token=' . $TMSMM_TOKEN;
		$post_array = [
		 	'name' => 'Имя задачи',
            'channel' => $url,  # @tmsmm_ru или https://t.me/joinchat/AAAAAFAMH5WQ_g
            'country' => 0,
            'sex' => 0,
            'count' => $count,
            'speed' => 1,
		];
		$snoopy->rawheaders["Content-Type"] = 'application/json';
		$snoopy->submit($href, $post_array);
		return $snoopy->results;
		*/
	}

}

# echo Instagram::likes(10, 'https://www.instagram.com/p/BgRQ5-gnn6L/?hl=ru&taken-by=fomchenkov_v');
# echo Instagram::followers(10, 'https://www.instagram.com/fomchenkov_v/?hl=ru');
# echo Instagram::comments(1, 'https://www.instagram.com/p/Bf-JugFgQU5/?hl=ru&taken-by=fomchenkov_v');

# echo VK::likes(100, 'https://vk.com/fomchenkov_v?z=photo168034338_456240346');
# echo VK::groups(10, 'https://vk.com/kronver_bot');
# echo VK::reposts(10, 'https://vk.com/fomchenkov_v?z=photo168034338_456239579');
# echo VK::add_friends(10, 'https://vk.com/fomchenkov_v/');

# echo Telegram::views(100, '@kronver_channel')
# echo Telegram::followers(100, '@kronver_channel')

?>
