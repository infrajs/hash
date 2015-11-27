<?php
namespace infrajs\hash;
class Hash {
	public static function make($args, $r = false){
		//Функция которая передаётся аргументом надо передвать как use
		if (is_array($args)) {
			$a = array();
			foreach ($args as $k => $v) {
				$a[$k] = self::make($v, true);
			}
		} else {
			if (is_callable($args)) {
				$a = 'func!';
			} else {
				//Заглушка для функции
				$a = $args;
			}
		}
		if ($r) {
			return serialize($a);
		}

		return md5(serialize($a));
	}
}
