<?= HTML::form_open('contact', 'contact/form') ?>
<table>
<tr>
    <td class="align-right">Name</td>
    <td><?= HTML::input('member->name', array('class' => 'input-field')) ?></td>
    <td></td>
</tr>
<tr>
    <td class="align-right">Email address</td>
    <td><?= HTML::input('member->email', array('class' => 'input-field')) ?></td>
    <td></td>
</tr>
<tr>
    <td class="align-right">Country</td>
    <td><?= HTML::input('member->country', array('class' => 'input-field')) ?></td>
    <td></td>
</tr>
<tr>
    <td class="align-right">Timezone</td>
    <td><?= HTML::input('member->timezone', array('class' => 'input-field')) ?></td>
    <td></td>
</tr>
<tr>
    <td class="align-right">Why I'd like to join</td>
    <td><?= HTML::textarea('member->interest', array('cols' => 50, 'rows' => 5)) ?></td>
    <td></td>
</tr>
<tr>
    <td class="align-right"></td>
    <td><?= HTML::submit('contact', 'Contact the Sangha') ?></td>
    <td></td>
</tr>
</table>
</form>
