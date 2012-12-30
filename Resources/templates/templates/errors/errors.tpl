{extends 'layout/wrapper.html.tpl'}
{block name="wrapper"}
{lang sect="errors" line="errno"}: <strong>{$view.errno}</strong>
<br/>
{lang sect="errors" line="err_message"}: <strong>{$view.message}</strong>
<br/>
{lang sect="errors" line="err_file"}: <strong>{$view.file}</strong>
<br/>
{lang sect="errors" line="err_line"}: <strong>{$view.line}</strong>
{/block}