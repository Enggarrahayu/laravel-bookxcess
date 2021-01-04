describe('Login Test', function (){

    it('Input texts', function () {
        cy.visit('/auth')
        
        cy.get('#longres-btn').click()
        cy.get('input[type="text"]').type("rahayu@gmail.com")
    })
})