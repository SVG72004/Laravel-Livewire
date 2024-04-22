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
    // variables
    const modalEditUserTaxID = document.querySelector('.modal-edit-tax-id');
    const modalEditUserPhone = document.querySelector('.phone-number-mask');

    // Prefix
    if (modalEditUserTaxID) {
      new Cleave(modalEditUserTaxID, {
        prefix: 'TIN',
        blocks: [3, 3, 3, 4],
        uppercase: true
      });
    }

    // Phone Number Input Mask
    if (modalEditUserPhone) {
      new Cleave(modalEditUserPhone, {
        phone: true,
        phoneRegionCode: 'US'
      });
    }

    // Add user form validation
    // FormValidation.formValidation(document.getElementById('UserForm'), {
    //   fields: {
    //     name: {
    //       validators: {
    //         notEmpty: {
    //           message: 'Please enter your name'
    //         },
    //         stringLength: {
    //           min: 1,
    //           max: 20,
    //           message: 'The name must be more than 6 and less than 10 characters long'
    //         },
    //         regexp: {
    //           regexp: /^[a-zA-Z0-9 ]+$/,
    //           message: 'The name can only consist of alphabetical, number and space'
    //         }
    //       }
    //     },
    //     user_name: {
    //       validators: {
    //         notEmpty: {
    //           message: 'Please enter your user name'
    //         },
    //         stringLength: {
    //           min: 1,
    //           max: 20,
    //           message: 'The name must be more than 1 and less than 10 characters long'
    //         },
    //         regexp: {
    //           regexp: /^[a-zA-Z0-9 ]+$/,
    //           message: 'The name can only consist of alphabetical, number and space'
    //         },
    //         remote:{
    //           valid: false,
    //         }
    //       }
    //     },
    //     email: {
    //       validators: {
    //         notEmpty: {
    //           message: 'Please enter your email'
    //         },
    //         emailAddress: {
    //           message: 'The value is not a valid email address'
    //         }
    //       }
    //     },
    //     phone_number: {
    //       validators: {
    //         notEmpty: {
    //           message: 'Please enter your phone number'
    //         },
    //       }
    //     },
    //     password: {
    //       validators: {
    //         notEmpty: {
    //           message: 'Please enter your password'
    //         }
    //       }
    //     },
    //     confirm_password: {
    //       validators: {
    //         notEmpty: {
    //           message: 'Please enter confirm password'
    //         },
    //         identical: {
    //           compare: function () {
    //             return document.getElementById('UserForm').querySelector('[name="password"]').value;
    //           },
    //           message: 'The password and its confirm are not the same'
    //         }
    //       }
    //     },
    //     role: {
    //       validators: {
    //         notEmpty: {
    //           message: 'Please select role'
    //         },
    //       }
    //     },
    //   },

    //   plugins: {
    //     trigger: new FormValidation.plugins.Trigger(),
    //     bootstrap5: new FormValidation.plugins.Bootstrap5({
    //       // Use this for enabling/changing valid/invalid class
    //       // eleInvalidClass: '',
    //       eleValidClass: '',
    //       rowSelector: '.col-12'
    //     }),
    //     submitButton: new FormValidation.plugins.SubmitButton(),
    //     // Submit the form when all fields are valid
    //     defaultSubmit: new FormValidation.plugins.DefaultSubmit(),
    //     autoFocus: new FormValidation.plugins.AutoFocus()
    //   }
    // });
    
//     FormValidation.formValidation(document.getElementById('UserForm'), {
//     fields: {
//         name: {
//             validators: {
//                 notEmpty: {
//                     message: 'Please enter your name'
//                 },
//                 stringLength: {
//                     min: 1,
//                     max: 20,
//                     message: 'The name must be between 1 and 20 characters long'
//                 },
//                 regexp: {
//                     regexp: /^[a-zA-Z0-9 ]+$/,
//                     message: 'The name can only consist of letters, numbers, and spaces'
//                 }
//             }
//         },
//         phone_number: {
//             validators: {
//                 notEmpty: {
//                     message: 'Please enter your phone number'
//                 }
//             }
//         },
//         country: {
//             validators: {
//                 notEmpty: {
//                     message: 'Please select your country'
//                 }
//             }
//         },
//         device_type: {
//             validators: {
//                 notEmpty: {
//                     message: 'Please select device type'
//                 }
//             }
//         },
//         password: {
//             validators: {
//                 notEmpty: {
//                     message: 'Please enter your password'
//                 }
//             }
//         },
//         confirm_password: {
//             validators: {
//                 notEmpty: {
//                     message: 'Please confirm your password'
//                 },
//                 identical: {
//                     compare: function () {
//                         return document.getElementById('UserForm').querySelector('[name="password"]').value;
//                     },
//                     message: 'The password and confirm password must match'
//                 }
//             }
//         },
//         role: {
//             validators: {
//                 notEmpty: {
//                     message: 'Please select user role'
//                 }
//             }
//         },
//         status: {
//             validators: {
//                 notEmpty: {
//                     message: 'Please select status'
//                 }
//             }
//         },
//         email: {
//             validators: {
//                 notEmpty: {
//                     message: 'Please enter your email'
//                 },
//                 emailAddress: {
//                     message: 'The email address is not valid'
//                 }
//             }
//         }
//     },
//     plugins: {
//         trigger: new FormValidation.plugins.Trigger(),
//         bootstrap5: new FormValidation.plugins.Bootstrap5({
//           // Use this for enabling/changing valid/invalid class
//           // eleInvalidClass: '',
//           eleValidClass: '',
//           rowSelector: '.col-12'
//         }),
//         submitButton: new FormValidation.plugins.SubmitButton(),
//         // Submit the form when all fields are valid
//         defaultSubmit: new FormValidation.plugins.DefaultSubmit(),
//         autoFocus: new FormValidation.plugins.AutoFocus()
//     }
// });


    // Add user form validation
    FormValidation.formValidation(document.getElementById('updateUserForm'), {
      fields: {
        name: {
          validators: {
            notEmpty: {
              message: 'Please enter your first name'
            },
            stringLength: {
              min: 1,
              max: 20,
              message: 'The name must be more than 6 and less than 10 characters long'
            },
            regexp: {
              regexp: /^[a-zA-Z0-9 ]+$/,
              message: 'The name can only consist of alphabetical, number and space'
            }
          }
        },
        user_name: {
          validators: {
            notEmpty: {
              message: 'Please enter your last name'
            },
            stringLength: {
              min: 1,
              max: 20,
              message: 'The name must be more than 1 and less than 10 characters long'
            },
            regexp: {
              regexp: /^[a-zA-Z0-9 ]+$/,
              message: 'The name can only consist of alphabetical, number and space'
            }
          }
        },
        email: {
          validators: {
            notEmpty: {
              message: 'Please enter your email'
            },
            emailAddress: {
              message: 'The value is not a valid email address'
            }
          }
        },
        phone_number: {
          validators: {
            notEmpty: {
              message: 'Please enter your phone number'
            },
          }
        },
      },

      plugins: {
        trigger: new FormValidation.plugins.Trigger(),
        bootstrap5: new FormValidation.plugins.Bootstrap5({
          // Use this for enabling/changing valid/invalid class
          // eleInvalidClass: '',
          eleValidClass: '',
          rowSelector: '.col-12'
        }),
         submitButton: new FormValidation.plugins.SubmitButton(),
        // Submit the form when all fields are valid
         defaultSubmit: new FormValidation.plugins.DefaultSubmit(),
        autoFocus: new FormValidation.plugins.AutoFocus()
      }
    });

    
  })();
});

function checkUserName() {
  var username = $('#user_name').val();

  $.post("/dashboard/user/getusername", {
    method: "post",
    "_token": $('input[name="_token"]').val(),
    username: username
  }).then((response) => {
    if(response == 1){
      $(".user_name").find(".invalid-feedback").html("User name already exists");
    }else{
      $(".user_name").find(".invalid-feedback").html("");
    }
  })
}

function checkEmail() {
  var email = $('#email').val();

  $.post("/dashboard/user/getemail", {
    method: "post",
    "_token": $('input[name="_token"]').val(),
    email: email
  }).then((response) => {
    console.log(response);
    if(response == 1){
      $(".email").find(".invalid-feedback").html("Email already exists");
    }else{
      $(".email").find(".invalid-feedback").html("");
    }
  })
}


// Add UserForm Submit
$("#UserForm====").submit(function(event) {
            event.preventDefault();
            let formData = new FormData(this);
            var user_id = $("#user_id").val();
            var url = (!user_id || user_id == null) ? "{{ route('addUser') }}" :
                "{{ route('updateUser') }}";
            $.ajax({
                url: url,
                type: 'post',
                data: formData,
                dataType: "json",
                contentType: false,
                processData: false,
                success: function(response) {
                    if (response['status'] == true) {
                        $("#name").siblings("p").removeClass("text-danger").html("");
                        $("#phone_number").siblings("p").removeClass("text-danger").html("");
                        $("#country").siblings("p").removeClass("text-danger").html("");
                        $("#device_type").siblings("p").removeClass("text-danger").html("");
                        $("#otp").siblings("p").removeClass("text-danger").html("");
                        $("#points").siblings("p").removeClass("text-danger").html("");
                        $("#password").siblings("p").removeClass("text-danger").html("");
                        $("#confirm_password").siblings("p").removeClass("text-danger").html("");
                        $("#role").siblings("p").removeClass("text-danger").html("");
                        $("#status").removeClass("text-danger").html("");
                        $("#UserForm")[0].reset();
                        window.location.href = '{{ route('users') }}';
                    } else {
                        var errors = response['errors'];
                        if (errors['name']) {
                            $("#name").siblings("p").addClass("text-danger").html(errors['name']);
                        } else {
                            $("#name").siblings("p").removeClass("text-danger").html("");
                        }
                        if (errors['phone_number']) {
                            $("#phone_number").siblings("p").addClass("text-danger").html(errors['phone_number']);
                        } else {
                            $("#phone_number").siblings("p").removeClass("text-danger").html("");
                        }
                        if (errors['country']) {
                            $("#country").siblings("p").addClass("text-danger").html(errors['country']);
                        } else {
                            $("#country").siblings("p").removeClass("text-danger").html("");
                        }
                        if (errors['device_type']) {
                            $("#device_type").siblings("p").addClass("text-danger").html(errors['device_type']);
                        } else {
                            $("#device_type").siblings("p").removeClass("text-danger").html("");
                        }
                        if (errors['otp']) {
                            $("#otp").siblings("p").addClass("text-danger").html(errors['otp']);
                        } else {
                            $("#otp").siblings("p").removeClass("text-danger").html("");
                        }
                        if (errors['points']) {
                            $("#points").siblings("p").addClass("text-danger").html(errors['points']);
                        } else {
                            $("#points").siblings("p").removeClass("text-danger").html("");
                        }
                        if (errors['password']) {
                            $("#password").siblings("p").addClass("text-danger").html(errors['password']);
                        } else {
                            $("#password").siblings("p").removeClass("text-danger").html("");
                        }
                        if (errors['confirm_password']) {
                            $("#confirm_password").siblings("p").addClass("text-danger").html(errors['confirm_password']);
                        } else {
                            $("#confirm_password").siblings("p").removeClass("text-danger").html("");
                        }
                        if (errors['role']) {
                            $("#role").siblings("p").addClass("text-danger").html(errors['role']);
                        } else {
                            $("#role").siblings("p").removeClass("text-danger").html("");
                        }
                        if (errors['status']) {
                            $("#status").addClass("text-danger").html(errors['status']);
                        } else {
                            $("#status").removeClass("text-danger").html("");
                        }
                    }
                },
                error: function(error) {
                    console.warn(error);
                }
            });
        });