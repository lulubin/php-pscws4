<?php
namespace lulubin\pscws4;

/**
 * IP 地理位置查询类
 */
class pscws4
{
    /**
     * 拆词
     */
    public function split($text)
    {
        require_once './pscws4/PSCWS4.php';
        $pcws = new PSCWS4();
        $pcws->set_charset('utf-8');
        $pcws->set_dict('./dict.utf8.xdb');
        $pcws->set_rule('./pscws4/etc/rules.ini');
        $pcws->send_text("印花冰丝凉");
        $article = [];
        while ($some = $pcws->get_result())
        {
            foreach ($some as $word)
            {
                $article[] = $word['word'];
            }
        }
        return $article;
    }
}