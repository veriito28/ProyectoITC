<?php

use Illuminate\Database\Seeder;

class CarrerasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$carreras = [
		['nombre'      =>'ING. AMBIENTAL',
		'url_reticula' => 'https://docs.google.com/viewerng/viewer?url=http://itculiacan.edu.mx/wp-content/uploads/2012/10/Reticula__Ingenieria_Ambiental_IAMB-2010-206.pdf'
		],
		['nombre'      =>'ING. BIOQUÍMICA',
		'url_reticula' => 'https://docs.google.com/viewerng/viewer?url=http://itculiacan.edu.mx/wp-content/uploads/2012/10/Reticula-Ingenieria-Bioquimica-IBQA-2010-207.pdf'
		],
		['nombre'      =>'ING. ELÉCTRICA',
		'url_reticula' => 'https://docs.google.com/viewerng/viewer?url=http://itculiacan.edu.mx/wp-content/uploads/2012/10/Reticula-Ingenieria-Electrica-IELE-2010-209.pdf'
		],
		['nombre'      =>'ING. ELECTRÓNICA',
		'url_reticula' => 'https://docs.google.com/viewerng/viewer?url=http://itculiacan.edu.mx/wp-content/uploads/2012/10/Reticula-Ingenieria-Electronica-IELC-2010-211.pdf'
		],
		['nombre'      =>'ING. EN ENERGÍAS RENOVABLES',
		'url_reticula' => 'https://docs.google.com/viewerng/viewer?url=http://itculiacan.edu.mx/wp-content/uploads/2013/09/Reticula-Ingenieria-en-Energias-Renovables-IENR-2010-217.pdf'
		],
		['nombre'      =>'ING. EN GESTIÓN EMPRESARIAL',
		'url_reticula' => 'https://docs.google.com/viewerng/viewer?url=http://itculiacan.edu.mx/wp-content/uploads/2014/09/Reticula-Ingenieria-en-Gestion-Empresarial-IGEM-2009-201.pdf'
		],
		['nombre'      =>'ING. INDUSTRIAL',
		'url_reticula' => 'https://docs.google.com/viewerng/viewer?url=http://itculiacan.edu.mx/wp-content/uploads/2012/10/Reticula-Ingenieria-Industrial-IIND-2010-227.pdf'
		],
		['nombre'      =>'ING. MECÁNICA',
		'url_reticula' => 'https://docs.google.com/viewerng/viewer?url=http://itculiacan.edu.mx/wp-content/uploads/2012/10/Reticula-Ingenieria-Mecanica-IMEC-2010-228.pdf'
		],
		['nombre'      =>'ING. MECATRÓNICA',
		'url_reticula' => 'https://docs.google.com/viewerng/viewer?url=http://itculiacan.edu.mx/wp-content/uploads/2012/10/Reticula-Ingenieria-Mecatronica-IMCT-2010-229.pdf'
		],
		['nombre'      =>'ING. EN SISTEMAS COMPUTACIONALES',
		'url_reticula' => 'https://docs.google.com/viewerng/viewer?url=http://itculiacan.edu.mx/wp-content/uploads/2012/10/Reticula-Ingenier%C3%83%C2%ADa-en-Sistemas-Computacionales-ISIC-2010-2.pdf'
		],
		['nombre'      =>'ING. EN TECNOLOGÍAS DE LA INFORMACIÓN Y COMUNICACIONES',
		'url_reticula' => 'https://docs.google.com/viewerng/viewer?url=http://itculiacan.edu.mx/wp-content/uploads/2012/10/Reticula-Ingenier%C3%83%C2%ADa-en-Tecnologias-de-la-Informacion-y-Comunicaciones-ITIC-2010-225.pdf'
		],
    	];
    	foreach ($carreras as $value) {
        	\App\Carrera::create($value);
    	}
    }
}

