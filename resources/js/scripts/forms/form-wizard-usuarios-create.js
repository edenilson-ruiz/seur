/*=========================================================================================
    File Name: form-wizard.js
    Description: wizard steps page specific js
    ----------------------------------------------------------------------------------------
    Item Name: Vuexy  - Vuejs, HTML & Laravel Admin Dashboard Template
    Author: PIXINVENT
    Author URL: http://www.themeforest.net/user/pixinvent
==========================================================================================*/

$(function () {
    'use strict';

    var bsStepper = document.querySelectorAll('.bs-stepper'),
        select = $('.select2'),
        horizontalWizard = document.querySelector('.horizontal-wizard-example'),
        verticalWizard = document.querySelector('.vertical-wizard-example'),
        modernWizard = document.querySelector('.modern-wizard-example'),
        modernVerticalWizard = document.querySelector('.modern-vertical-wizard-example');

    // Adds crossed class
    if (typeof bsStepper !== undefined && bsStepper !== null) {
        for (var el = 0; el < bsStepper.length; ++el) {
            bsStepper[el].addEventListener('show.bs-stepper', function (event) {
                var index = event.detail.indexStep;
                var numberOfSteps = $(event.target).find('.step').length - 1;
                var line = $(event.target).find('.step');

                // The first for loop is for increasing the steps,
                // the second is for turning them off when going back
                // and the third with the if statement because the last line
                // can't seem to turn off when I press the first item. ¯\_(ツ)_/¯

                for (var i = 0; i < index; i++) {
                    line[i].classList.add('crossed');

                    for (var j = index; j < numberOfSteps; j++) {
                        line[j].classList.remove('crossed');
                    }
                }
                if (event.detail.to === 0) {
                    for (var k = index; k < numberOfSteps; k++) {
                        line[k].classList.remove('crossed');
                    }
                    line[0].classList.remove('crossed');
                }
            });
        }
    }

    // select2
    select.each(function () {
        var $this = $(this);
        $this.wrap('<div class="position-relative"></div>');
        $this.select2({
            placeholder: 'Select value',
            dropdownParent: $this.parent()
        });
    });

    // Horizontal Wizard
    // --------------------------------------------------------------------
    if (typeof horizontalWizard !== undefined && horizontalWizard !== null) {
        var numberedStepper = new Stepper(horizontalWizard),
            $form = $(horizontalWizard).find('form');
        $form.each(function () {
            var $this = $(this);
            $this.validate({
                rules: {
                    usuario_nombre_1: {
                        required: true
                    },
                    usuario_apellido_1: {
                        required: true
                    },
                    usuario_fecha_nacimiento: {
                        required: true
                    },
                    usuario_email: {
                        required: true
                    },
                    usuario_tipo_documento_id: {
                        required: true
                    },
                    usuario_numero_doc: {
                        required: true
                    },
                    genero_id: {
                        required: true
                    },
                    estado_civil_id: {
                        required: true
                    },
                    escolaridad_id: {
                        required: true
                    },
                    ocupacion_id: {
                        required: true
                    },
                    usuario_direccion_calle_avenida: {
                        required: true
                    },
                    usuario_direccion_casa_edificio_apto: {
                        required: true
                    },
                    usuario_direccion_colonia_barrio: {
                        required: true
                    },
                    departamento_id: {
                        required: true
                    },
                    municipio_id: {
                        required: true
                    },
                    nombre_conyugue: {
                        required: true
                    }
                }
            });
        });

        $(horizontalWizard)
            .find('.btn-next')
            .each(function () {
                $(this).on('click', function (e) {
                    var isValid = $(this).parent().siblings('form').valid();
                    if (isValid) {
                        numberedStepper.next();
                    } else {
                        e.preventDefault();
                    }
                });
            });

        $(horizontalWizard)
            .find('.btn-prev')
            .on('click', function () {
                numberedStepper.previous();
            });

        $(horizontalWizard)
            .find('.btn-submit')
            .on('click', function () {
                var isValid = $(this).parent().siblings('form').valid();
                if (isValid) {
                    alert('Submitted..!!');
                }
            });$(horizontalWizard)
            .find('.btn-submit')
            .on('click', function () {
                var isValid = $(this).parent().siblings('form').valid();
                if (isValid) {
                    let usuario_nombre_1 = $('#usuario_nombre_1').val();
                    let usuario_nombre_2 = $('#usuario_nombre_2').val();
                    let usuario_nombre_3 = $('#usuario_nombre_3').val();
                    let usuario_apellido_1 = $('#usuario_apellido_1').val();
                    let usuario_apellido_2 = $('#usuario_apellido_2').val();
                    let usuario_apellido_3 = $('#usuario_apellido_3').val();
                    let referencia_id = $('#referencia_id').val();
                    let establecimiento_id = $('#establecimiento_id').val();
                    let usuario_direccion_colonia_barrio = $('#usuario_direccion_colonia_barrio').val();
                    let usuario_fecha_nacimiento = $('#usuario_fecha_nacimiento').val();
                    let usuario_fecha_apertura_exp = $('#usuario_fecha_apertura_exp').val();
                    let usuario_tel_fijo = $('#usuario_tel_fijo').val();
                    let usuario_tel_celular = $('#usuario_tel_celular').val();
                    let usuario_email = $('#usuario_email').val();
                    let usuario_tipo_documento_id = $('#usuario_tipo_documento_id').val();
                    let usuario_numero_doc = $('#usuario_numero_doc').val();
                    let usuario_direccion_calle_avenida = $('#usuario_direccion_calle_avenida').val();
                    let usuario_direccion_casa_edificio_apto = $('#usuario_direccion_casa_edificio_apto').val();
                    let motivo_atencion_id = $('#motivo_atencion_id').val();
                    let responsable_direccion = $('#responsable_direccion').val();
                    let municipio_id = $('#municipio_id').val();
                    let genero_id = $('#genero_id').val();
                    let estado_civil_id = $('#estado_civil_id').val();
                    let escolaridad_id = $('#escolaridad_id').val();
                    let ocupacion_id = $('#ocupacion_id').val();
                    let nombre_padre = $('#nombre_padre').val();
                    let nombre_madre = $('#nombre_madre').val();
                    let nombre_conyugue = $('#nombre_conyugue').val();
                    let departamento_id = $('#departamento_id').val();
                    let responsable_telefono = $('#responsable_telefono').val();
                    let informante_nombre = $('#informante_nombre').val();
                    let informante_parentesco = $('#informante_parentesco').val();
                    let informante_tipo_documento_id = $('#informante_tipo_documento_id').val();
                    let informante_numero_doc = $('#informante_numero_doc').val();
                    let informante_telefono = $('#informante_telefono').val();
                    let informante_direccion = $('#informante_direccion').val();
                    let responsable_nombre = $('#responsable_nombre').val();
                    let user_id = $('#user_id').val();

                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    $.ajax({
                        url: "/usuarios",
                        type: "POST",
                        data: {
                            usuario_nombre_1 : usuario_nombre_1,
                            usuario_nombre_2 : usuario_nombre_2,
                            usuario_nombre_3 : usuario_nombre_3,
                            usuario_apellido_1 : usuario_apellido_1,
                            usuario_apellido_2 : usuario_apellido_2,
                            usuario_apellido_3 : usuario_apellido_3,
                            referencia_id : referencia_id,
                            establecimiento_id : establecimiento_id,
                            usuario_direccion_colonia_barrio : usuario_direccion_colonia_barrio,
                            usuario_fecha_nacimiento : usuario_fecha_nacimiento,
                            usuario_fecha_apertura_exp : usuario_fecha_apertura_exp,
                            usuario_tel_fijo : usuario_tel_fijo,
                            usuario_tel_celular : usuario_tel_celular,
                            usuario_email : usuario_email,
                            usuario_tipo_documento_id : usuario_tipo_documento_id,
                            usuario_numero_doc : usuario_numero_doc,
                            usuario_direccion_calle_avenida : usuario_direccion_calle_avenida,
                            usuario_direccion_casa_edificio_apto : usuario_direccion_casa_edificio_apto,
                            motivo_atencion_id : motivo_atencion_id,
                            responsable_direccion : responsable_direccion,
                            municipio_id : municipio_id,
                            genero_id : genero_id,
                            estado_civil_id : estado_civil_id,
                            escolaridad_id : escolaridad_id,
                            ocupacion_id : ocupacion_id,
                            nombre_padre : nombre_padre,
                            nombre_madre : nombre_madre,
                            nombre_conyugue : nombre_conyugue,
                            departamento_id : departamento_id,
                            responsable_telefono : responsable_telefono,
                            informante_nombre : informante_nombre,
                            informante_parentesco : informante_parentesco,
                            informante_tipo_documento_id : informante_tipo_documento_id,
                            informante_numero_doc : informante_numero_doc,
                            informante_telefono : informante_telefono,
                            informante_direccion : informante_direccion,
                            responsable_nombre : responsable_nombre,
                            user_id : user_id
                        },
                        success: function (response) {
                            console.log(response);
                        },
                        error: function (response) {
                            console.log(response);
                        }
                    });
                }
            });
    }

// Vertical Wizard
// --------------------------------------------------------------------
if (typeof verticalWizard !== undefined && verticalWizard !== null) {
    var verticalStepper = new Stepper(verticalWizard, {
        linear: false
    });
    $(verticalWizard)
        .find('.btn-next')
        .on('click', function () {
            verticalStepper.next();
        });
    $(verticalWizard)
        .find('.btn-prev')
        .on('click', function () {
            verticalStepper.previous();
        });

    $(verticalWizard)
        .find('.btn-submit')
        .on('click', function () {
            alert('Submitted..!!');
        });
}

// Modern Wizard
// --------------------------------------------------------------------
if (typeof modernWizard !== undefined && modernWizard !== null) {
    var modernStepper = new Stepper(modernWizard, {
        linear: false
    });
    $(modernWizard)
        .find('.btn-next')
        .on('click', function () {
            modernStepper.next();
        });
    $(modernWizard)
        .find('.btn-prev')
        .on('click', function () {
            modernStepper.previous();
        });

    $(modernWizard)
        .find('.btn-submit')
        .on('click', function () {
            alert('Submitted..!!');
        });
}

// Modern Vertical Wizard
// --------------------------------------------------------------------
if (typeof modernVerticalWizard !== undefined && modernVerticalWizard !== null) {
    var modernVerticalStepper = new Stepper(modernVerticalWizard, {
        linear: false
    });
    $(modernVerticalWizard)
        .find('.btn-next')
        .on('click', function () {
            modernVerticalStepper.next();
        });
    $(modernVerticalWizard)
        .find('.btn-prev')
        .on('click', function () {
            modernVerticalStepper.previous();
        });

    $(modernVerticalWizard)
        .find('.btn-submit')
        .on('click', function () {
            alert('Submitted..!!');
        });
}
})
;
