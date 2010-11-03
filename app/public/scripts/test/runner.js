with (YAWF) {

var fixture = {
  name: 'Kevin Hutchinson',
  email: 'kevin.hutchinson@legendum.com',
  country: 'Mexico',
  timezone: 'Central time',
  content: 'I would love to join your Sangha!',
}

when_open('contact/form', function() {
  input('contact', 'message_name', fixture.name);
  input('contact', 'message_email', fixture.email);
  input('contact', 'message_country', fixture.country);
  input('contact', 'message_timezone', fixture.timezone);
  input('contact', 'message_content', fixture.content);
  after(4000, function() { // pause so we're not spammy
    click('contact', 'contact');
  });
});

when_open('default/index', function() {
  when_found('Thank you', function() {
    should_find('Kevin Hutchinson');
    should_find('I would love to join your Sangha!');
  });
});

} // End of runner.js
