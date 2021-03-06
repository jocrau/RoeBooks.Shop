<?php
namespace RoeBooks\Shop\Domain\Model;

/*                                                                        *
 * This script belongs to the FLOW3 package "RoeBooks.Shop".              *
 *                                                                        *
 *                                                                        */

use TYPO3\FLOW3\Annotations as FLOW3;
use Doctrine\ORM\Mapping as ORM;

/**
 * A Basket
 *
 * @FLOW3\Scope("session")
 */
class Basket {

	/**
	 * The books
	 * @var \Doctrine\Common\Collections\Collection<\RoeBooks\Shop\Domain\Model\Book>
	 * @ORM\ManyToMany
	 */
	protected $books;

	/**
	 *
	 */
	public function __construct() {
		$this->books = new \Doctrine\Common\Collections\ArrayCollection();
	}

	/**
	 * Get the Basket's books
	 *
	 * @return \Doctrine\Common\Collections\Collection<\RoeBooks\Shop\Domain\Model\Book> The Basket's books
	 */
	public function getBooks() {
		return $this->books;
	}

	/**
	 * Adds a book to the basket
	 *
	 * @param \RoeBooks\Shop\Domain\Model\Book $book The book to add
	 * @return void
	 * @FLOW3\Session(autoStart=true)
	 */
	public function addBook(Book $book) {
		$this->books->add($book);
	}

	/**
	 * Adds a book to the basket
	 *
	 * @param \RoeBooks\Shop\Domain\Model\Book $book The book to add
	 * @return void
	 */
	public function removeBook(Book $book) {
		$this->books->removeElement($book);
	}

}
?>