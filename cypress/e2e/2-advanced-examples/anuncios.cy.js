/// <reference types="cypress" />

describe('Carga la página anuncios', () => {
    
    it('prueba el Header de la página anuncios', () => {
        cy.visit('/propiedades')

        cy.get('[data-cy="heading-propiedades"]').should('exist');

        cy.get('[data-cy="heading-propiedades"]').invoke('text').should('equal', 'Casas y apartamentos en venta');
        cy.get('[data-cy="heading-propiedades"]').invoke('text').should('not.equal', 'Casas y Apartamentos en venta');
    });

    it('Prueba la sección DINÁMICA de anuncios', () => {

        // Debe haber 6 anuncios
        cy.get('[data-cy="anuncio"]').should('have.length', 6);
        cy.get('[data-cy="anuncio"]').should('not.have.length', 5);

        // Probar el enlace de los anuncios
        cy.get('[data-cy="enlace-propiedad"]').should('have.class', 'boton-amarillo-block');
        cy.get('[data-cy="enlace-propiedad"]').should('not.have.class', 'boton-amarillo-block-admin');
        
        cy.get('[data-cy="enlace-propiedad"]').first().invoke('text').should('equal', 'Ver propiedad');

        // Probar el enlace a un anuncio
        cy.get('[data-cy="enlace-propiedad"]').first().click();
        cy.get('[data-cy="titulo-propiedad"]').should('exist');
    });
});