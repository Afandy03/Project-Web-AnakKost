$(document).ready(function() {
    $('#enableButtonForm')
        .bootstrapValidator({
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                username: {
                    validators: {
                        notEmpty: {
                            message: 'The Username is required'
                        },
                        stringLength: {
                        min: 6,
                        max: 30,
                        message: 'The username must be more than 6 and less than 30 characters long'
                        },
                    }
                },
                namaKos: {
                    validators: {
                        notEmpty: {
                            message: 'The name kos is required'
                        },
                        stringLength: {
                        min: 6,
                        max: 50,
                        message: 'The name must be more than 6 and less than 50 characters long'
                        }
                    }
                },
                nama: {
                    validators: {
                        notEmpty: {
                            message: 'The name is required'
                        },
                        stringLength: {
                        min: 6,
                        max: 50,
                        message: 'The name must be more than 6 and less than 50 characters long'
                        }
                    }
                },
                alamat: {
                    validators: {
                        notEmpty: {
                            message: 'The address is required'
                        },
                        stringLength: {
                        max: 30,
                        message: 'The address must less than 30 characters long'
                        }
                    }
                },
                ukuran: {
                    validators: {
                        notEmpty: {
                            message: 'can not empty'
                        },
                    }
                },
                email: {
                    validators: {
                        notEmpty: {
                            message: 'The email address is required and cannot be empty'
                        },
                        emailAddress: {
                            message: 'The email address is not a valid'
                        }
                    }
                },
                description: {
                    validators: {
                        notEmpty: {
                            message: 'The description is required'
                        }
                    }
                },
                barangDalam: {
                    validators: {
                        notEmpty: {
                            message: 'The description is required'
                        }
                    }
                },
                priority: {
                    validators: {
                        notEmpty: {
                            message: 'The priority is required'
                        }
                    }
                },
                password: {
                validators: {
                    notEmpty: {
                            message: 'The Password is required'
                        },
                        different: {
                            field: 'username',
                            message: 'The password cannot be the same as username<br>'
                        },
                    identical: {
                        field: 'confirmPassword',
                        message: 'The password and its confirm are not the same'
                        }
                    }
                },
                number: {
                    validators: {
                        notEmpty: {
                            message: 'The number is required'
                        },
                        integer: {
                            message: 'The value is not an integer'
                        },
                        stringLength: {
                            max: 15,
                            message: 'The number must be less than 15 digit'
                        }
                    }
                },
                harga: {
                    validators: {
                        notEmpty: {
                            message: 'The price is required'
                        },
                        integer: {
                            message: 'The value is not an integer'
                        },
                        stringLength: {
                            max: 12,
                            message: 'The value must be less than 12 digit'
                        }
                    }
                },
                gender: {
                    validators: {
                        notEmpty: {
                            message: 'The gender is required'
                        }
                    }
                },
                tersedia: {
                    validators: {
                        notEmpty: {
                            message: 'can not empty'
                        },
                        integer: {
                            message: 'The value is not an integer'
                        }
                    }
                },
                wifi: {
                    validators: {
                        notEmpty: {
                            message: 'can not empty'
                        }
                    }
                },
                ac: {
                    validators: {
                        notEmpty: {
                            message: 'can not empty'
                        }
                    }
                },
                kamarMandi: {
                    validators: {
                        notEmpty: {
                            message: 'can not empty'
                        }
                    }
                },
                fileimage: {
                    validators: {
                        notEmpty: {
                            message: 'Please select an image'
                        },
                        file: {
                            extension: 'jpeg,jpg,png',
                            type: 'image/jpeg,image/png',
                            maxSize: 375000,   // 2048 * 1024
                            message: 'The selected file is not valid'
                        }
                    }
                },
            confirmPassword: {
                validators: {
                    identical: {
                        field: 'password',
                        message: 'The password and its confirm are not the same'
                        }
                    }
                }
            }
        })
        .on('status.field.bv', function (e, data) {
            // $(e.target)  --> The field element
            // data.bv      --> The BootstrapValidator instance
            // data.field   --> The field name
            // data.element --> The field element

            data.bv.disableSubmitButtons(false);
        });
});

