<?php
	class Expediente
	{
		private $exp_remitente;
		private $exp_tipoDocumento;
		private $exp_numeroDocumento;
		private $exp_numeroCelular;
		private $exp_correoElectronico;
		private $exp_tramiteRealizar;
		private $exp_descripcion;
		private $exp_archivo;

		public function __construct()
		{
		}

		public function __GET($x)
		{
		  return $this->$x;
		}

		public function __SET($x, $y)
		{
		  return $this->$x = $y;
		}
	}
?>