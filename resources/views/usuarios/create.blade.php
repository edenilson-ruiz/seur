@extends('layouts/contentLayoutMaster')

@section('title', 'Creación de Usuario')

@section('vendor-style')
    <!-- vendor css files -->
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/wizard/bs-stepper.min.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/select/select2.min.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/pickers/pickadate/pickadate.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/pickers/flatpickr/flatpickr.min.css')) }}">
@endsection

@section('page-style')
    <!-- Page css files -->
    <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-validation.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-wizard.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/pickers/form-flat-pickr.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/pickers/form-pickadate.css')) }}">
@endsection

@section('content')
    <!-- Horizontal Wizard -->
    <section class="horizontal-wizard">
        <div class="bs-stepper horizontal-wizard-example">
            <div class="bs-stepper-header" role="tablist">
                <div class="step" data-target="#account-details" role="tab" id="account-details-trigger">
                    <button type="button" class="step-trigger">
                        <span class="bs-stepper-box">1</span>
                        <span class="bs-stepper-label">
                            <span class="bs-stepper-title">Datos Personales</span>
                            <span class="bs-stepper-subtitle">Ingresar datos personales</span>
                        </span>
                    </button>
                </div>
                <div class="line">
                    <i data-feather="chevron-right" class="font-medium-2"></i>
                </div>
                <div class="step" data-target="#personal-info" role="tab" id="personal-info-trigger">
                    <button type="button" class="step-trigger">
                        <span class="bs-stepper-box">2</span>
                        <span class="bs-stepper-label">
                            <span class="bs-stepper-title">Personal Info</span>
                            <span class="bs-stepper-subtitle">Add Personal Info</span>
                        </span>
                    </button>
                </div>
                <div class="line">
                    <i data-feather="chevron-right" class="font-medium-2"></i>
                </div>
                <div class="step" data-target="#address-step" role="tab" id="address-step-trigger">
                    <button type="button" class="step-trigger">
                        <span class="bs-stepper-box">3</span>
                        <span class="bs-stepper-label">
                            <span class="bs-stepper-title">Address</span>
                            <span class="bs-stepper-subtitle">Add Address</span>
                        </span>
                    </button>
                </div>
                <div class="line">
                    <i data-feather="chevron-right" class="font-medium-2"></i>
                </div>
                <div class="step" data-target="#social-links" role="tab" id="social-links-trigger">
                    <button type="button" class="step-trigger">
                        <span class="bs-stepper-box">4</span>
                        <span class="bs-stepper-label">
                            <span class="bs-stepper-title">Social Links</span>
                            <span class="bs-stepper-subtitle">Add Social Links</span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="bs-stepper-content">
                <div id="account-details" class="content" role="tabpanel" aria-labelledby="account-details-trigger">
                    <div class="content-header">
                        <h5 class="mb-0">Datos Personales</h5>
                        <small class="text-muted">Ingrese los datos personales del usuario</small>
                    </div>
                    <form>
                        <div class="row">
                            <div class="mb-1 col-md-4">
                                <label class="form-label" for="usuario_nombre_1">Primer Nombre</label>
                                <input type="text" name="usuario_nombre_1" id="usuario_nombre_1" class="form-control"
                                    placeholder="Primer Nombre" />
                            </div>
                            <div class="mb-1 col-md-4">
                                <label class="form-label" for="usuario_nombre_2">Segundo Nombre</label>
                                <input type="text" name="usuario_nombre_2" id="usuario_nombre_2" class="form-control"
                                    placeholder="Segundo Nombre" />
                            </div>
                            <div class="mb-1 col-md-4">
                                <label class="form-label" for="usuario_nombre_3">Tercer Nombre</label>
                                <input type="text" name="usuario_nombre_3" id="usuario_nombre_3" class="form-control"
                                    placeholder="Tercer Nombre" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-1 col-md-4">
                                <label class="form-label" for="usuario_apellido_1">Primer Apellido</label>
                                <input type="text" name="usuario_apellido_1" id="usuario_apellido_1" class="form-control"
                                    placeholder="Primer Apellido" />
                            </div>
                            <div class="mb-1 col-md-4">
                                <label class="form-label" for="usuario_apellido_2">Segundo Apellido</label>
                                <input type="text" name="usuario_apellido_2" id="usuario_apellido_2" class="form-control"
                                    placeholder="Segundo Apellido" />
                            </div>
                            <div class="mb-1 col-md-4">
                                <label class="form-label" for="usuario_apellido_3">Tercer Apellido</label>
                                <input type="text" name="usuario_apellido_3" id="usuario_apellido_3" class="form-control"
                                    placeholder="Tercer Apellido" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-1 col-md-4">
                                <label class="form-label" for="usuario_direccion_calle_avenida">Calle/Avenida</label>
                                <input type="text" name="usuario_direccion_calle_avenida"
                                    id="usuario_direccion_calle_avenida" class="form-control"
                                    placeholder="Calle/Avenida" />
                            </div>
                            <div class="mb-1 col-md-4">
                                <label class="form-label"
                                    for="usuario_direccion_casa_edificio_apto">Casa/Edificio/Apartamento</label>
                                <input type="text" name="usuario_direccion_casa_edificio_apto"
                                    id="usuario_direccion_casa_edificio_apto" class="form-control"
                                    placeholder="Casa/Edificio/Apartamento" />
                            </div>
                            <div class="mb-1 col-md-4">
                                <label class="form-label" for="usuario_direccion_colonia_barrio">Colonia/Barrio</label>
                                <input type="text" name="usuario_direccion_colonia_barrio"
                                    id="usuario_direccion_colonia_barrio" class="form-control"
                                    placeholder="Colonia/Barrio" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-1 col-md-3">
                                <label class="form-label" for="usuario_fecha_nacimiento">Fecha de Nacimiento</label>
                                <input type="text" name="usuario_fecha_nacimiento" id="usuario_fecha_nacimiento"
                                    class="form-control flatpickr-basic" placeholder="YYYY-MM-DD"
                                    placeholder="Fecha de Nacimiento" />
                            </div>
                            <div class="mb-1 col-md-3">
                                <label class="form-label" for="usuario_fecha_apertura_exp">Fecha Apertura
                                    Expediente</label>
                                <input type="text" name="usuario_fecha_apertura_exp" id="usuario_fecha_apertura_exp"
                                    class="form-control flatpickr-basic" placeholder="YYYY-MM-DD"
                                    placeholder="Fecha Apertura Expediente" />
                            </div>
                            <div class="mb-1 col-md-3">
                                <label class="form-label" for="usuario_tel_fijo">Telefono Fijo</label>
                                <input type="text" name="usuario_tel_fijo" id="usuario_tel_fijo" class="form-control"
                                    placeholder="Telefono Fijo" />
                            </div>
                            <div class="mb-1 col-md-3">
                                <label class="form-label" for="usuario_tel_celular">Telefono Celular</label>
                                <input type="text" name="usuario_tel_celular" id="usuario_tel_celular"
                                    class="form-control" placeholder="Telefono Celular" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-1 col-md-4">
                                <label class="form-label" for="email">Correo Electronico</label>
                                <input type="email" name="usuario_email" id="usuario_email" class="form-control"
                                    placeholder="juan.perez@email.com" aria-label="juan.perez" />
                            </div>
                            <div class="mb-1 col-md-4">
                                <label class="form-label" for="usuario_tipo_documento_id">Tipo de Documento</label>
                                <select class="form-select" id="usuario_tipo_documento_id"
                                    name="usuario_tipo_documento_id">
                                    <option value="">Seleccione</option>
                                    @foreach ($tipoDocumentos as $tipoDocumento)
                                        <option value="{{ $tipoDocumento->id }}">
                                            {{ $tipoDocumento->tipo_documento_nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-1 col-md-4">
                                <label class="form-label" for="usuario_numero_doc">Numero de Documento</label>
                                <input type="text" name="usuario_numero_doc" id="usuario_numero_doc" class="form-control"
                                    placeholder="Numero de Documento" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 mb-4">
                                <label class="form-label" for="referencia_id">Referencia</label>
                                <select class="select2 form-select" id="referencia_id" name="referencia_id">
                                    <option value="">Seleccione</option>
                                    @foreach ($referencias as $referencia)
                                        <option value="{{ $referencia->id }}">{{ $referencia->referencia_nombre }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4 mb-4">
                                <label class="form-label" for="establecimiento_id">Establecimiento</label>
                                <select class="select2 form-select" id="establecimiento_id" name="establecimiento_id">
                                    <option value="">Seleccione</option>
                                    @foreach ($establecimientos as $establecimiento)
                                        <option value="{{ $establecimiento->id }}">
                                            {{ $establecimiento->establecimiento_nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4 mb-4">
                                <label class="form-label" for="motivo_atencion_id">Motivo de Atención</label>
                                <select class="select2 form-select" id="motivo_atencion_id" name="motivo_atencion_id">
                                    <option value="">Seleccione</option>
                                    @foreach ($motivosAtencion as $motivo_atencion)
                                        <option value="{{ $motivo_atencion->id }}">
                                            {{ $motivo_atencion->motivo_atencion_nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <livewire:dropdown-municipios />
                    </form>
                    <div class="d-flex justify-content-between">
                        <button class="btn btn-outline-secondary btn-prev" disabled>
                            <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
                            <span class="align-middle d-sm-inline-block d-none">Previous</span>
                        </button>
                        <button class="btn btn-primary btn-next">
                            <span class="align-middle d-sm-inline-block d-none">Next</span>
                            <i data-feather="arrow-right" class="align-middle ms-sm-25 ms-0"></i>
                        </button>
                    </div>
                </div>
                <div id="personal-info" class="content" role="tabpanel" aria-labelledby="personal-info-trigger">
                    <div class="content-header">
                        <h5 class="mb-0">Personal Info</h5>
                        <small>Enter Your Personal Info.</small>
                    </div>
                    <form>
                        <div class="row">
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="first-name">First Name</label>
                                <input type="text" name="first-name" id="first-name" class="form-control"
                                    placeholder="John" />
                            </div>
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="last-name">Last Name</label>
                                <input type="text" name="last-name" id="last-name" class="form-control"
                                    placeholder="Doe" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="country">Country</label>
                                <select class="select2 w-100" name="country" id="country">
                                    <option label=" "></option>
                                    <option>UK</option>
                                    <option>USA</option>
                                    <option>Spain</option>
                                    <option>France</option>
                                    <option>Italy</option>
                                    <option>Australia</option>
                                </select>
                            </div>
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="language">Language</label>
                                <select class="select2 w-100" name="language" id="language" multiple>
                                    <option>English</option>
                                    <option>French</option>
                                    <option>Spanish</option>
                                </select>
                            </div>
                        </div>
                    </form>
                    <div class="d-flex justify-content-between">
                        <button class="btn btn-primary btn-prev">
                            <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
                            <span class="align-middle d-sm-inline-block d-none">Previous</span>
                        </button>
                        <button class="btn btn-primary btn-next">
                            <span class="align-middle d-sm-inline-block d-none">Next</span>
                            <i data-feather="arrow-right" class="align-middle ms-sm-25 ms-0"></i>
                        </button>
                    </div>
                </div>
                <div id="address-step" class="content" role="tabpanel" aria-labelledby="address-step-trigger">
                    <div class="content-header">
                        <h5 class="mb-0">Address</h5>
                        <small>Enter Your Address.</small>
                    </div>
                    <form>
                        <div class="row">
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="address">Address</label>
                                <input type="text" id="address" name="address" class="form-control"
                                    placeholder="98  Borough bridge Road, Birmingham" />
                            </div>
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="landmark">Landmark</label>
                                <input type="text" name="landmark" id="landmark" class="form-control"
                                    placeholder="Borough bridge" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="pincode1">Pincode</label>
                                <input type="text" id="pincode1" class="form-control" placeholder="658921" />
                            </div>
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="city1">City</label>
                                <input type="text" id="city1" class="form-control" placeholder="Birmingham" />
                            </div>
                        </div>
                    </form>
                    <div class="d-flex justify-content-between">
                        <button class="btn btn-primary btn-prev">
                            <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
                            <span class="align-middle d-sm-inline-block d-none">Previous</span>
                        </button>
                        <button class="btn btn-primary btn-next">
                            <span class="align-middle d-sm-inline-block d-none">Next</span>
                            <i data-feather="arrow-right" class="align-middle ms-sm-25 ms-0"></i>
                        </button>
                    </div>
                </div>
                <div id="social-links" class="content" role="tabpanel" aria-labelledby="social-links-trigger">
                    <div class="content-header">
                        <h5 class="mb-0">Social Links</h5>
                        <small>Enter Your Social Links.</small>
                    </div>
                    <form>
                        <div class="row">
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="twitter">Twitter</label>
                                <input type="text" id="twitter" name="twitter" class="form-control"
                                    placeholder="https://twitter.com/abc" />
                            </div>
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="facebook">Facebook</label>
                                <input type="text" id="facebook" name="facebook" class="form-control"
                                    placeholder="https://facebook.com/abc" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="google">Google+</label>
                                <input type="text" id="google" name="google" class="form-control"
                                    placeholder="https://plus.google.com/abc" />
                            </div>
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="linkedin">Linkedin</label>
                                <input type="text" id="linkedin" name="linkedin" class="form-control"
                                    placeholder="https://linkedin.com/abc" />
                            </div>
                        </div>
                    </form>
                    <div class="d-flex justify-content-between">
                        <button class="btn btn-primary btn-prev">
                            <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
                            <span class="align-middle d-sm-inline-block d-none">Previous</span>
                        </button>
                        <button class="btn btn-success btn-submit">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Horizontal Wizard -->
@endsection

@section('vendor-script')
    <!-- vendor files -->
    <script src="{{ asset(mix('vendors/js/forms/wizard/bs-stepper.min.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/forms/select/select2.full.min.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/forms/validation/jquery.validate.min.js')) }}"></script>
    <!-- vendor files -->
    <script src="{{ asset(mix('vendors/js/pickers/pickadate/picker.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/pickers/pickadate/picker.date.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/pickers/pickadate/picker.time.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/pickers/pickadate/legacy.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/pickers/flatpickr/flatpickr.min.js')) }}"></script>
@endsection
@section('page-script')
    <!-- Page js files -->
    <script src="{{ asset(mix('js/scripts/forms/form-wizard-usuarios-create.js')) }}"></script>
    <script src="{{ asset(mix('js/scripts/forms/pickers/form-pickers.js')) }}"></script>
    <script src="{{ asset(mix('js/scripts/forms/form-select2.js')) }}"></script>
@endsection
