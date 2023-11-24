<?php

namespace App\Entity;

class Course {

	private ?int $id;
	private ?string $title;
	private ?int $level;
	private ?bool $premium;

	public function getId(): ?int {
		return $this->id;
	}

	public function getTitle(): ?string {
		return $this->title;
	}

	public function setTitle(?string $title): void {
		$this->title = $title;
	}

	public function getLevel(): ?int {
		return $this->level;
	}

	public function setLevel(?int $level): void {
		$this->level = $level;
	}

	public function isPremium(): ?bool {
		return $this->premium;
	}

	public function setPremium(?bool $premium): void {
		$this->premium = $premium;
	}
}
