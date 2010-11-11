<p>
    Please download and install <a href="http://messenger.yahoo.com/">Yahoo Messenger</a> on your<br/>
    computer if you do not already use it. (It is required).<br/>
</p>
<?= Form::open('contact', 'contact/form') ?>
<table>
<tr>
    <td class="align-right">Name</td>
    <td><?= HTML::input('message->name', array('class' => 'input-field')) ?> <?= HTML::validation_message('message->name') ?></td>
</tr>
<tr>
    <td class="align-right"><strong>Yahoo</strong> email address</td>
    <td><?= HTML::input('message->email', array('class' => 'input-field')) ?> <?= HTML::validation_message('message->email') ?></td>
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
    <td class="align-right">Why you'd like to join<br/>and how you found us</td>
    <td><?= HTML::textarea('message->content', array('cols' => 50, 'rows' => 10)) ?></td>
</tr>
<tr>
    <td class="align-right"></td>
    <td>
        <?= HTML::submit('contact', 'Contact the Sangha') ?>
        <?= Form::spam_field() ?>
    </td>
</tr>
</table>
</form>
<?= Form::spam_script() ?>
