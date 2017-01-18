$(document).ready(function(){
    
    
    $('#formAddMahasiswa').formValidation({

        framework : 'bootstrap',
        excluded : 'disabled',

        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            nim: {
                validators: {
                    notEmpty: {
                        message: 'NIM Wajib Diisi !'
                    },stringLength : {
                        max : 20
                    }
                }
            },
            nama_lengkap:{
                validators:{
                    notEmpty: {
                        message : 'Nama Wajib Diisi !'
                    }
                }
            },
            alamat:{
                validators:{
                    notEmpty: {
                        message : 'Alamat Wajib Diisi !'
                    }
                }
            },
            kota:{
                validators:{
                    notEmpty: {
                        message : 'Kota Wajib Diisi !'
                    }
                }
            },
            kodepos:{
                validators:{
                    notEmpty: {
                        message : 'Kodepos Wajib Diisi !'
                    },
                    numeric : {
                        message : 'Masukan Kodepos Dengan Benar!'
                    }

                }
            },
            tempat_lahir:{
                validators:{
                    notEmpty: {
                        message : 'Tempat Lahir Wajib Diisi !'
                    }
                }
            },
            tanggal_lahir:{
                validators:{
                    notEmpty: {
                        message : 'Tanggal_Lahir Wajib Diisi !'
                    }
                }
            }
        }
    })
        

    $('#formAddTahunAjaran').formValidation({

        framework : 'bootstrap',
        excluded : 'disabled',

        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            tahun: {
                validators: {
                    notEmpty: {
                        message: 'Tahun Wajib Diisi !'
                    },
                    numeric : {
                        message : 'Masukan Tahun Dengan Benar!'
                    }
                }
            }
        }
    });

    $('#formAddKelas').formValidation({

        framework : 'bootstrap',
        excluded : 'disabled',

        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            kode_kelas: {
                validators: {
                    notEmpty: {
                        message: 'Kode Kelas Wajib Diisi !'
                    }
                }
            },
            nama_kelas: {
                validators: {
                    notEmpty: {
                        message: 'Nama Kelas Wajib Diisi !'
                    }
                }
            }
        }
    });

    $('#formAddDosen').formValidation({

        framework : 'bootstrap',
        excluded : 'disabled',

        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            kode_dosen: {
                validators: {
                    notEmpty: {
                        message: 'Kode Dosen Wajib Diisi !'
                    }
                }
            },
            nama_dosen: {
                validators: {
                    notEmpty: {
                        message: 'Nama Dosen Wajib Diisi !'
                    }
                }
            },
            alamat_jalan: {
                validators: {
                    notEmpty: {
                        message: 'Alamat Wajib Diisi !'
                    }
                }
            },
            kota: {
                validators: {
                    notEmpty: {
                        message: 'Kota Wajib Diisi !'
                    }
                }
            },
            pendidikan: {
                validators: {
                    notEmpty: {
                        message: 'Pendidikan Wajib Diisi !'
                    }
                }
            }
        }
    });

    $('#formAddMataKuliah').formValidation({

        framework : 'bootstrap',
        excluded : 'disabled',

        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            kode_mk: {
                validators: {
                    notEmpty: {
                        message: 'Kode Mata Kuliah Wajib Diisi !'
                    }
                }
            },
            nama_mk: {
                validators: {
                    notEmpty: {
                        message: 'Nama Mata Kuliah Wajib Diisi !'
                    }
                }
            },
            sks: {
                validators: {
                    notEmpty: {
                        message: 'SKS Wajib Diisi !'
                    }
                }
            }
        }
    });

    $('#formAddSemester').formValidation({

        framework : 'bootstrap',
        excluded : 'disabled',

        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            semester: {
                validators: {
                    notEmpty: {
                        message: 'Semester Wajib Diisi !'
                    }
                }
            }
        }
    });

    $('#formLogin').formValidation({

        framework : 'bootstrap',
        excluded : 'disabled',

        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            username: {
                validators: {
                    notEmpty: {
                        message: 'Username Wajib Diisi !'
                    }
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: 'Password Wajib Diisi !'
                    }
                }
            }
        }
    });

    $('#formAddRuang').formValidation({

        framework : 'bootstrap',
        excluded : 'disabled',

        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            nama_ruang: {
                validators: {
                    notEmpty: {
                        message: 'Kode Kelas Wajib Diisi !'
                    }
                }
            },
            kapasitas: {
                validators: {
                    notEmpty: {
                        message: 'Nama Kelas Wajib Diisi !'
                    },
                    numeric : {
                        message : 'Masukan Kapasitas Dengan benar !'
                    }
                }
            }
        }
    });


    $('#formAddUser').formValidation({

        framework : 'bootstrap',
        excluded : 'disabled',

        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            username: {
                validators: {
                    notEmpty: {
                        message: 'Username Wajib Diisi !'
                    }
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: 'Password Wajib Diisi !'
                    }
                }
            },
            id_level: {
                validators: {
                    notEmpty: {
                        message: 'Level Wajib Diisi !'
                    }
                }
            }
        }
    });

    $('#formAddLevel').formValidation({

        framework : 'bootstrap',
        excluded : 'disabled',

        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            nama_level: {
                validators: {
                    notEmpty: {
                        message: 'Nama Level Wajib Diisi !'
                    }
                }
            }
        }
    });

    $('#formAddProdi').formValidation({

        framework : 'bootstrap',
        excluded : 'disabled',

        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            kode_prodi: {
                validators: {
                    notEmpty: {
                        message: 'Kode Prodi Wajib Diisi !'
                    }
                }
            },
            nama_prodi: {
                validators: {
                    notEmpty: {
                        message: 'Nama Prodi Wajib Diisi !'
                    }
                }
            },
            kode_prodi: {
                validators: {
                    notEmpty: {
                        message: 'Nama Level Wajib Diisi !'
                    }
                }
            },
            tahun_berdiri: {
                validators: {
                    notEmpty: {
                        message: 'Tahun Berdiri Wajib Diisi !'
                    }
                }
            },
            no_sk: {
                validators: {
                    notEmpty: {
                        message: 'No SK Dikti Wajib Diisi !'
                    }
                }
            },
            jenjang: {
                validators: {
                    notEmpty: {
                        message: 'Jenjang Wajib Diisi !'
                    }
                }
            }
        }
    });

    $('#formTambahJadwal').formValidation({

        framework : 'bootstrap',
        excluded : 'disabled',

        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            kode_mk: {
                validators: {
                    notEmpty: {
                        message: 'Kode Mata Kuliah Wajib Diisi !'
                    }
                }
            },
            kode_dosen: {
                validators: {
                    notEmpty: {
                        message: 'Kode Dosen  Wajib Diisi !'
                    }
                }
            },
            kode_ruang: {
                validators: {
                    notEmpty: {
                        message: 'Ruang Wajib Diisi !'
                    }
                }
            },
            kode_kelas: {
                validators: {
                    notEmpty: {
                        message: 'Kelas Wajib Diisi !'
                    }
                }
            },
            jam_mulai :{
                validators:{
                    notEmpty:{
                        message : 'Jam Mulai Wajib Diisi !'
                    }
                }
            },
            jam_selesai :{
                validators:{
                    
                    notEmpty:{
                        message : 'Jam Selesai Wajib Diisi !'
                    }
                }
            }
        }
    });
});


