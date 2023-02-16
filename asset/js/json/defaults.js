// team
var default_team_data = {
  name: '',
  base_salary: '',
  hours_work_per_week: '37.50',
  annual_leave: '4'
}

var default_team = {
  adviser: {
    type: 'adviser',
    label: 'Advisers',
    defaultPercentage: '60',
    datas: []
  },
  paraplanner: {
    type: 'paraplanner',
    label: 'Paraplanners',
    defaultPercentage: '90',
    datas: [],
  },
  administration_staff: {
    type: 'administration_staff',
    label: 'Client Service Offers',
    defaultPercentage: '80',
    datas: []
  }
}

//financial targets
var default_financial_target = {
  foresee_next_year: 'No',
  percent_expenses_grow: '',
  profit_margin_coming_year: '35',
  expenses_last_year: ''
}

// advice
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

// service
var add_one_to_one_service = {
  label: '',
  editable_label: 1,
  time: '',
  producers: '',
  admin: '',
  other_cost: '',
  consider_offer: 0,
  notes: ''
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

var default_one_to_one_service = one_to_one_service_labels.map(function(label) {
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

var default_one_to_many_service = one_to_many_service_labels.map(function(label) {
  return Object.assign({}, add_one_to_many_service, { label: label });
});

// strategy
var add_strategy_variation = {
  label: '',
  editable_label: 1,
  time: '',
  producers: '',
  admin: '',
  other_cost: '',
  area_look_at: 0,
  notes: ''
}

var add_strategy_management = Object.assign({}, add_strategy_variation);

var default_strategy_variation_labels = [
  'Establish new SMSF',
  'Advise on existing SMSF',
  'Equity portfolio',
  'Personal protection',
  'Aged Care',
  'Business Insurance',
  'Estate Planning',
  'Financing',
  'Complex investment scenarios',
  'International affairs',
  'Mortgage lending',
  'Travel to client',
  'Finance',
  'Self-employed business client',
  'Redundancy package',
  'Aged Care'
];

var default_strategy_management_labels = [
  'High-touch client',
  'SMSF',
  'Equity portfolio',
  'Personal protection',
  'Additional research',
  'Business Insurance',
  'Estate Planning',
  'Tax returns',
  'Complex investment scenarios',
  'International affairs',
  'Mortgage lending',
  'Travel to client',
  'Tax returns',
  'Self-employed business client',
  'Redundancy package',
  'Additional research'
];

var default_strategy_variation = default_strategy_variation_labels.map(function(label) {
  return Object.assign({}, add_strategy_variation, { label: label });
});

var default_strategy_management = default_strategy_management_labels.map(function(label) {
  return Object.assign({}, add_strategy_management, { label: label });
});

// other datas
var default_other_data = {
  bonus_paid_adviser: '',
  other_cost_adviser: '',
  bonus_paid_paraplanner: '',
  other_cost_paraplanner: '',
  bonus_paid_administration_staff: '',
  other_cost_administration_staff: '',
}