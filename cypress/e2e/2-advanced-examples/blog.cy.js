/// <reference types="cypress" />

describe('Carga la página blog', () => {
    
    it('prueba el Header de la página blog', () => {
        cy.visit('/blog')

        cy.get('[data-cy="heading-blog"]').should('exist');

        cy.get('[data-cy="heading-blog"]').invoke('text').should('equal', 'Nuestro Blog');
        cy.get('[data-cy="heading-blog"]').invoke('text').should('not.equal', 'Nuestro blog');
    });

    it('Prueba la sección DINÁMICA de blogs', () => {

        // Debe haber 4 blogs
        cy.get('[data-cy="entrada-blog"]').should('have.length', 4);
        cy.get('[data-cy="entrada-blog"]').should('not.have.length', 3).and('not.have.length', 5);

        // Probar el enlace a un anuncio
        cy.get('[data-cy="enlace-blog"]').first().click();
        cy.get('[data-cy="titulo-blog"]').should('exist');
        
    });
});