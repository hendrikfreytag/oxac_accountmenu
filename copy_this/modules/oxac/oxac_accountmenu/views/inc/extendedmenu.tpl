[{assign var='mycontents' value=$oViewConf->oxac_getMyContentList()}]
[{foreach from=$mycontents item='mycontent'}]
    <li><a href="[{$mycontent->getLink()}]" rel="nofollow"><span>[{$mycontent->oxcontents__oxtitle->value}]</span></a></li>
[{/foreach}]
