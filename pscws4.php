<?php
namespace lulubin\pscws4;

use lulubin\pscws4\pscws4\PSCWS4BASE;

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
        
        $currentDir = __DIR__;
        $pcws = new PSCWS4BASE();
        $pcws->set_charset('utf-8');
        $pcws->set_dict($currentDir.'/dict.utf8.xdb');
        $pcws->set_rule($currentDir.'/pscws4/etc/rules.ini');
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