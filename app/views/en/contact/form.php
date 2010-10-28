<p>
    We will try to respond to your inquiry as soon as possible. Thank you for your patience.
</p>

<?= HTML::form_open('contact', 'contact/form', Form::spam_attrs()) ?>
<table>
<tr>
    <td class="align-right">Name</td>
    <td><?= HTML::input('message->name', array('class' => 'input-field')) ?> <?= HTML::validation_message('message->name') ?></td>
</tr>
<tr>
    <td class="align-right">Email address</td>
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
    <td class="align-right">Why you'd like to join<br/>(or another message)</td>
    <td><?= HTML::textarea('message->content', array('cols' => 50, 'rows' => 5)) ?></td>
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
