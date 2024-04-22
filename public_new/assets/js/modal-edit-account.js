/**
 * Edit User
 */

'use strict';

// Select2 (jquery)
$(function () {
  const select2 = $('.select2');

  // Select2 Country
  if (select2.length) {
    select2.each(function () {
      var $this = $(this);
      $this.wrap('<div class="position-relative"></div>').select2({
        placeholder: 'Select value',
        dropdownParent: $this.parent()
      });
    });
  }
});

document.addEventListener('DOMContentLoaded', function (e) {
  (function () {
    
    // Add account form validation
    FormValidation.formValidation(document.getElementById('AccountForm'), {
      fields: {
          name: {
              validators: {
                  notEmpty: {
                      message: 'Please enter a name'
                  },
                  stringLength: {
                      min: 1,
                      max: 20,
                      message: 'The name must be between 1 and 20 characters long'
                  },
                  regexp: {
                      regexp: /^[a-zA-Z0-9 ]+$/,
                      message: 'The name can only consist of letters, numbers, and spaces'
                  }
              }
          },
          phone_number: {
              validators: {
                  notEmpty: {
                      message: 'Please enter a phone number'
                  },
                  stringLength: {
                    min: 10,
                    max: 10,
                    message: 'Please enter a valid phone number'
                },
                  regexp: {
                      regexp: /^[0-9]+$/,
                      message: 'Please enter a valid phone number'
                  }
              }
          },
          website: {
              validators: {
                  notEmpty: {
                      message: 'Please enter a website'
                  },
                  uri: {
                      message: 'Please enter a valid URL'
                  }
              }
          },
          description: {
              validators: {
                  notEmpty: {
                      message: 'Please enter a description'
                  }
              }
          },
          upload_date: {
              validators: {
                  notEmpty: {
                      message: 'Please select upload date'
                  },
                  date: {
                      format: 'YYYY-MM-DD',
                      message: 'Please enter a valid date in the format YYYY-MM-DD'
                  }
              }
          },
          project_type: {
              validators: {
                  notEmpty: {
                      message: 'Please select at least one project type'
                  }
              }
          },
      },
      plugins: {
          trigger: new FormValidation.plugins.Trigger(),
          bootstrap5: new FormValidation.plugins.Bootstrap5({
              eleValidClass: '',
              rowSelector: '.col-12'
          }),
          submitButton: new FormValidation.plugins.SubmitButton(),
          defaultSubmit: new FormValidation.plugins.DefaultSubmit(),
          autoFocus: new FormValidation.plugins.AutoFocus()
      }
  });
  

    // Add user form validation
    FormValidation.formValidation(document.getElementById('AccountFormUpdate'), {
      fields: {
        name: {
            validators: {
                notEmpty: {
                    message: 'Please enter a name'
                },
                stringLength: {
                    min: 1,
                    max: 20,
                    message: 'The name must be between 1 and 20 characters long'
                },
                regexp: {
                    regexp: /^[a-zA-Z0-9 ]+$/,
                    message: 'The name can only consist of letters, numbers, and spaces'
                }
            }
        },
        phone_number: {
            validators: {
                notEmpty: {
                    message: 'Please enter a phone number'
                },
                stringLength: {
                  min: 10,
                  max: 10,
                  message: 'Please enter a valid phone number'
              },
                regexp: {
                    regexp: /^[0-9]+$/,
                    message: 'Please enter a valid phone number'
                }
            }
        },
        website: {
            validators: {
                notEmpty: {
                    message: 'Please enter a website'
                },
                uri: {
                    message: 'Please enter a valid URL'
                }
            }
        },
        description: {
            validators: {
                notEmpty: {
                    message: 'Please enter a description'
                }
            }
        },
        upload_date: {
            validators: {
                notEmpty: {
                    message: 'Please select upload date'
                },
                date: {
                    format: 'YYYY-MM-DD',
                    message: 'Please enter a valid date in the format YYYY-MM-DD'
                }
            }
        },
        project_type: {
            validators: {
                notEmpty: {
                    message: 'Please select at least one project type'
                }
            }
        },
    },

      plugins: {
        trigger: new FormValidation.plugins.Trigger(),
        bootstrap5: new FormValidation.plugins.Bootstrap5({
          eleValidClass: '',
          rowSelector: '.col-12'
        }),
         submitButton: new FormValidation.plugins.SubmitButton(),
         defaultSubmit: new FormValidation.plugins.DefaultSubmit(),
        autoFocus: new FormValidation.plugins.AutoFocus()
      }
    });

  })();
});