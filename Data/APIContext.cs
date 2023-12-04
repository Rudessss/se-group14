using Microsoft.EntityFrameworkCore;
using CinemaAPI.Model;

namespace CinemaAPI.Data {

    public class APIContext : DbContext {
        public APIContext(DbContextOptions<APIContext> options) : base(options) { }
        public DbSet<UserInfo> UserInfo { get; set; }
        public DbSet<FilmInfo> FilmInfo { get; set; }
    }
}
