/*
 * Book.java
 * @author Mala Gupta
 * @version 1.0
 *
 * Twist in project - Create immutable class
 * Existing - Class Book is mutable
 * Challenge - Modify Book to make it immutable
 *
 * The existing code of this class enables changes to its fields,
 * which must be disallowed.
 *
 * Note - Don't delete the existing funnctionality
 * offered by method addPages.
 *
 */

public class Book {
    int pages;
    String ISBN;

    public Book(int pages, String ISBN) {
        this.pages = pages;
        this.ISBN = ISBN;
    }

    public Book addPages(int count) {
        pages += count;
        return this;
    }

    public static Book createInstance(int pages, String ISBN) {
        Book b = new Book (pages, ISBN);
        return b;
    }
}