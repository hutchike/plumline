<div class="float-right box">
    <p>If you'd like to connect via <b>Google+</b> please click <a href="https://plus.google.com/100453604255526795394/posts">this link</a>.</p>
    <p>We also have a <b>Facebook</b> group called "Plumline" - please feel free to join us!</p>
</div>
<?= HTML::form_open('contact', 'contact/form', Spam::attrs()) ?>
<table>
<tr>
    <td class="align-right">Name</td>
    <td><?= HTML::input('message->name', array('class' => 'input-field')) ?> <?= HTML::validation_message('message->name') ?></td>
</tr>
<tr>
    <td class="align-right">
<a href="https://edit.yahoo.com/registration">Yahoo email address</a></td>
    <td><?= HTML::input('message->email', array('class' => 'input-field')) ?> (required) <?= HTML::validation_message('message->email') ?></td>
</tr>
<tr>
    <td class="align-right">Other email address*</td>
    <td><?= HTML::input('message->email_other', array('class' => 'input-field')) ?> (optional) <?= HTML::validation_message('message->email_other') ?></td>
</tr>
<tr>
    <td class="align-right">Country</td>
    <td><?= HTML::input('message->country', array('class' => 'input-field')) ?> <?= HTML::validation_message('message->country') ?></td>
</tr>
<tr>
    <td class="align-right">Timezone</td>
    <td><?= HTML::input('message->timezone', array('class' => 'input-field')) ?> <?= HTML::validation_message('message->timezone') ?></td>
</tr>
<tr>
    <td class="align-right">Preferred meeting</td>
    <td><?= HTML::select('message->meeting', array('No preference / Not sure', 'Monday 11am Central (GMT-6)', 'Monday 7pm Central (GMT-6)', 'Thursday 9am GMT', 'All meetings'), $message->meeting, array('class' => 'input-field')) ?> <?= HTML::validation_message('message->meeting') ?></td>
</tr>
<tr>
    <td class="align-right">Why you'd like to join<br/>and how you found us</td>
    <td><?= HTML::textarea('message->content', array('cols' => 50, 'rows' => 10)) ?></td>
</tr>
<tr>
    <td class="align-right"></td>
    <td>
        <?= HTML::submit('contact', 'Contact the Sangha') ?>
        <?= Spam::field() ?>
    </td>
</tr>
</table>
</form>
<?= Spam::script() ?>

<h3>Source Sangha and "Hokey Pokey" Sangha</h3>
<p>
    Both of these Sanghas meet using Yahoo Messenger.<br/>
    Please download and install <a href="http://messenger.yahoo.com/">Yahoo Messenger</a> on your<br/>
    computer if you do not already use it. (It is required).<br/>
    Our e-Sangha meeting format is <a href="/practice/mindfulness">described here</a>.
</p>

*Some people use their Yahoo email address just for instant messaging (online chat).<br/>
We ask them to consider providing an alternative email address so that we can contact<br/>
them more effectively about Sangha matters.
