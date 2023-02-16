var add_strategy_variation = {
  label: '',
  editable_label: 1,
  time: '',
  producers: '',
  admin: '',
  other_cost: '',
  area_look_at: 0
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

var default_strategy_variations = default_strategy_variation_labels.map(function(label) {
  return Object.assign({}, add_strategy_variation, { label: label });
});

var default_strategy_management = default_strategy_management_labels.map(function(label) {
  return Object.assign({}, add_strategy_management, { label: label });
});