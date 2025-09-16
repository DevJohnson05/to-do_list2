<?php
	/**
	 * 
	 */
	class form_tratament
	{
		protected string $name,$desc;
		protected array $erro = [];

		/*public function __construct($name, $desc) {
			$this->validate
		}*/

		protected function validate_name($name): void {
			if (empty(trim(string: $name)) || $name == '' ) {
				$this->erro[] = "Nome não pode ser vazio!";
				return;
			}
			$this->set_name(name: $name);
		}
		protected function validate_desc($desc) {
			if (empty(trim(string: $desc)) || $desc == '' ) {
				$this->erro[] = "Descrição não pode ser vazia";
				return;
			}
			$this->set_desc(desc: $desc);
		}
		public static function validate_values(string $name, string $desc): array {
			$validator = new self();
			$validator->validate_name(name: $name);
			$validator->validate_desc(desc: $desc);

			if (empty($validator->get_erro())) {
				return [
					"sucess" => true,
					"dates" => [
						"name" => $name,
						"desc" => $desc
					]
				];
			}
			return [
				"sucess" => false,
				"erros" => $validator->get_erro()
			];
		}
		public function get_name(): string {
			return $this->name;
		}
		public function set_name($name): void {
			$this->name = $name;
		}
		public function get_desc(): string {
			return $this->desc;
		}
		public function set_desc($desc): void {
			$this->desc = $desc;
		}
		public function get_erro(): array {
			return $this->erro;
		}
		public function set_erro($erro): void {
			$this->erro[] = $erro;
		}

	}
	
?>