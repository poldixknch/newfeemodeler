var add_one_to_one_service = {
  label: '',
  editable_label: 1,
  time: '',
  producers: '',
  admin: '',
  other_cost: '',
  consider_offer: 0
}

var add_one_to_many_service = Object.assign({}, add_one_to_one_service, { people: '', service_offering: {
  service_1: '',
  service_2: '',
  service_3: '',
  service_4: '',
  service_5: '',
  service_6: '',
  service_7: ''
} });

var one_to_one_service_labels = [
  'Complete Strategy Review',
  'Simple performance review',
  'Insurance Review',
  'Touch-base phone call',
  'Phone/ online meeting',
  'Face-to-face meeting',
  'Meet with client\'s advisers',
  'Send portfolio report',
  'Changes to portfolio',
  'End of Year tax report',
  'Response to unique event',
  'Record of Advice',
  'Statement of Advice'
];

var one_to_many_service_labels = [
  'Newsletter',
  'Educational seminar',
  'Prestige event',
  'Offer of review',
  'FDS statements',
  'Webinar',
  'Online Knowledge Centre Area',
  'Budget Update'
];

var default_one_to_one_services = one_to_one_service_labels.map(function(label) {
  return Object.assign({}, add_one_to_one_service, { label: label, service_offering: {
    service_1: '',
    service_2: '',
    service_3: '',
    service_4: '',
    service_5: '',
    service_6: '',
    service_7: ''
  } });
});

var default_one_to_many_services = one_to_many_service_labels.map(function(label) {
  return Object.assign({}, add_one_to_many_service, { label: label });
});