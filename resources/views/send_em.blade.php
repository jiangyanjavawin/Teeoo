<div>
    <table style="border: 1px solid rgb(0, 0, 0);" width="750" align="center" border="0" cellpadding="0" cellspacing="0">
        <tbody>
        <tr>
            <td style="padding: 10px;" bgcolor="#cccccc"><font style="font-size: 18px;">{{$title}}有新的评论</font></td>
        </tr>
        <tr>
            <td style="padding: 5px;">作者：{{$author}} <a href='mailto:{{$mail}}'>{{$mail}}</a></td>
        </tr>
        <tr>
            <td style="padding: 5px;">时间：{{$time->diffForHumans()}}</td>
        </tr>
        <tr>
            <td style="padding: 5px;">链接：<a href='{{$link}}' target='_blank'>{{$link}}</a></td>
        </tr>
        <tr>
            <td style="padding: 5px;">内容:<br/><div style="padding: 10px;">{{$content}}</div></td>
        </tr>
        <tr>
            <td align="right"><font style="font-size: 10px; font-family: Arial,Helvetica,sans-serif;" color="#999999">本邮件为{site}自动发送，请勿回复！</font></td>
        </tr>
        </tbody>
    </table>
</div>