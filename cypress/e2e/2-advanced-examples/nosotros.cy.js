/// <reference types="cypress" />

describe('Carga la página nosotros', () => {
    
    it('prueba el Header de la página nosotros', () => {
        
        cy.visit('/nosotros')

        cy.get('[data-cy="heading-nosotros"]').should('exist');

        cy.get('[data-cy="heading-nosotros"]').invoke('text').should('equal', 'Conoce sobre nosotros');
        cy.get('[data-cy="heading-nosotros"]').invoke('text').should('not.equal', 'Conoce sobre Nosotros');
    });

    it('prueba la imagen de la página nosotros', () => {
        
        cy.get('[data-cy="imagen-nosotros"]').should('exist');

    });

    it('prueba el texto de la página nosotros', () => {
        
        cy.get('[data-cy="texto-nosotros"]').should('exist');

        cy.get('[data-cy="mas-info-nosotros"]').should('exist');
    });
});