from locust import HttpUser, task, between
class MyUser(HttpUser):
    wait_time = between(1, 3)  # Time between consecutive tasks

    @task
    def task_cart(self):
        self.client.get("/cart")
    @task
    def task_checkout(self):
        self.client.get("/checkout")
    @task
    def task_home(self):
        self.client.get("/homepage")
    @task
    def task_Admin(self):
        self.client.get("/adminHomePage")
    @task
    def task_body(self):
        self.client.get("/body")
    @task
    def task_cleansers(self):
        self.client.get("/cleansers")
    @task
    def task_eyeliner(self):
        self.client.get("/eyeliner")
    @task
    def task_confirmation(self):
        self.client.get("/confirmation")
    @task
    def task_AboutUs(self):
        self.client.get("/AboutUs")
    @task
    def task_contactUs(self):
        self.client.get("/contactUs")
    @task
    def task_eyes(self):
        self.client.get("/eyes")
    @task
    def task_eyeshadows(self):
        self.client.get("/eyeshadows")
    @task
    def task_mascara(self):
        self.client.get("/mascara")
    @task
    def task_ProductTable(self):
        self.client.get("/productTable")
    @task
    def task_lipSets(self):
        self.client.get("/lipSets")
    @task
    def task_lips(self):
        self.client.get("/lips")
    @task
    def task_lipSticks(self):
        self.client.get("/lipSticks")
    @task
    def task_lipPencils(self):
        self.client.get("/lipPencils")
    @task
    def task_lipTints(self):
        self.client.get("/lipTints")
    @task
    def task_oils(self):
        self.client.get("/oils")
    @task
    def task_masks(self):
        self.client.get("/masks")
    @task
    def task_serums(self):
        self.client.get("/serums")
    @task
    def task_cleansers(self):
        self.client.get("/cleansers")
    @task
    def task_skincare(self):
        self.client.get("/skincare")
    @task
    def task_highlighter(self):
        self.client.get("/highlighter")
    @task
    def task_concealer(self):
        self.client.get("/concealer")
    @task
    def task_brushes(self):
        self.client.get("/brushes")
    @task
    def task_blush(self):
        self.client.get("/blush")
    @task
    def task_face(self):
        self.client.get("/face")
    @task
    def task_lotions(self):
        self.client.get("/lotions")
    @task
    def task_scrubs(self):
        self.client.get("/scrubs")
    host = "http://localhost:8000"