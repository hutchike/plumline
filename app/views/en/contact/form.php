<p>
    We will try to respond to your inquiry as soon as possible. Thank you for your patience.
</p>

<?= HTML::form_open('contact', 'contact/form', Spam::form_attrs()) ?>
<table>
<tr>
    <td class="align-right">Name</td>
    <td><?= HTML::input('member->name', array('class' => 'input-field')) ?> <?= HTML::validation_message('member->name') ?></td>
</tr>
<tr>
    <td class="align-right">Email address</td>
    <td><?= HTML::input('member->email', array('class' => 'input-field')) ?> <?= HTML::validation_message('member->email') ?></td>
</tr>
<tr>
    <td class="align-right">Country</td>
    <td><?= HTML::input('member->country', array('class' => 'input-field')) ?> <?= HTML::validation_message('member->country') ?></td>
</tr>
<tr>
    <td class="align-right">Timezone</td>
    <td><?= HTML::input('member->timezone', array('class' => 'input-field')) ?> <?= HTML::validation_message('member->timezone') ?></td>
</tr>
<tr>
    <td class="align-right">Why you'd like to join<br/>(or another message)</td>
    <td><?= HTML::textarea('member->interest', array('cols' => 50, 'rows' => 5)) ?></td>
</tr>
<tr>
    <td class="align-right"></td>
    <td>
        <?= HTML::submit('contact', 'Contact the Sangha') ?>
        <?= Spam::form_field() ?>
    </td>
</tr>
</table>
</form>
<?= Spam::form_script() ?>
