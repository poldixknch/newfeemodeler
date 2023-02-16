var add_advice = {
  label: '',
  editable_label: 1,
  time: '',
  producers: '',
  admin: '',
  other_cost: '',
  notes: ''
}

var standard_advice_labels = [
  'Pre-meeting engagement',
  'Meeting prep',
  'Initial meeting',
  'Initial meeting debrief',
  'Strategy planning',
  'Pre-meeting preparation',
  'Second meeting',
  'Finalise strategy',
  'Prepare SOA',
  'Third meeting',
  'Implementation',
  'Post implementation follow-up'
];

var transactional_advice_labels = [
  'Pre-meeting engagement',
  'Meeting prep',
  'Initial meeting',
  'Initial meeting debrief',
  'Strategy planning',
  'Prepare SOA',
  'Plan presentation',
  'Implementation',
  'Post implementation follow-up'

];

var default_standard_advice = standard_advice_labels.map(function(label) {
  return Object.assign({}, add_advice, { label: label, editable_label: 0 });
});
default_standard_advice.push(angular.copy(add_advice));

var default_transactional_advice = transactional_advice_labels.map(function(label) {
  return Object.assign({}, add_advice, { label: label, editable_label: 0 });
});
default_transactional_advice.push(angular.copy(add_advice));
