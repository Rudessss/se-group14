using System.ComponentModel.DataAnnotations;

namespace CinemaAPI.Model {
    public class FilmInfo {
        [Key]
        public string? FilmId { get; set; }
        public string? FilmName { get; set; }
        public string? FilmDirector { get; set; }
        public string? FilmProducer { get; set; }
        public string? FilmStarring { get; set; }
        public string? FilmDescription { get; set; }
    }
}
